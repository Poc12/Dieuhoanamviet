<?php

namespace App\Http\Controllers\FrontEnd\Post;

use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Statics;
use Artesaos\SEOTools\Facades\SEOMeta;

class PostController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Post();
        $this->dir = __DIR__;
    }

    public function index_post($slug)
    {
        $tpl = [];
        $post = $this->model->active()->typeOfficial()->with('user')->where('slug', $slug)->active()->first();
        $where = [
           'post_id' => @$post['id']
        ];
        $check = 0;
        if(!$post) {
            $post = Statics::query()->active()->with('user')->where('slug', $slug)->active()->first();
            $where = [
                'static_id' => @$post['id']
            ];
            $check = 1;
        }
        $comments = Comment::query()->where($where)->get();
        $tpl['comments'] = $comments;
        if($post) {
            $this->seo()->setTitle(@$post['name']);
            SEOMeta::setKeywords(@$post['name']);
            $this->seo()->setDescription($post['name']);
            $this->seo()->addImages(show_img(@$post['avatar']));
            $posts = $this->model->typeOfficial()->where('id', '<>', $post['id'])->limit(6)->orderBy('id')->get();
            $lwpost = $posts->take(2); // split để cắt thành ? mảng
            $pluck = $lwpost->pluck('id')->toArray();
            $postNew = $posts->whereNotIn('id', $pluck);
            $allCate = Category::query()->active()->get(['id', 'slug', 'name']);
            $alltag = $allCate->where('type', Category::getInstance()->get_type_tag());
            $categories = $allCate->where('type','<>', Category::getInstance()->get_type_tag());
            if($post['tags']) {
                $tags = json_decode($post['tags']);
                $tags = $alltag->whereIn('id', $tags);
                $lw = $this->model->whereJsonContains('tags', $tags)->where('id', '<>', $post['id'])->limit(2)->get();
                if(!$lw->isEmpty()) {
                    $lwpost = $lw;
                }
                $tpl['tags'] = $tags;
            }
            $tpl['alltag'] = $alltag;
            $tpl['lwpost'] = $lwpost;
            $tpl['post'] = $post;
            $tpl['check'] = $check;
            $tpl['categories'] = $categories;
            $tpl['postNew'] = $postNew;
            return eView::getInstance()->setView($this->dir, 'detail', $tpl);
        }
        return eView::getInstance()->notfound();

    }

    function validate_ajax($request) {
        $this->model = new comment();
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'comment' => 'required|string|min:3|max:255',
        ];

        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'email' => ':attribute hợp lệ',
            'regex' => ':attribute hợp lệ',
            'string' => ':attribute hợp lệ',
            'min' => ':attribute tối thiểu 3 kí tự',
            'max' => ':attribute tối đa 3 kí tự',
        ], [
            'email' => 'Email',
            'comment' => 'Nội dung',
            'name' => 'Tên khách hàng',
        ]);
    }


    function before_save(&$model, $request) {
        $model->name = $request->get('name');
        $model->email = $request->get('email');
        $model->comment = $request->get('comment');
        if($request->get('check')) {
            $model->static_id = $request->get('post_id');
        }else{
            $model->post_id = $request->get('post_id');
        }
    }


    function result_response(&$result, $model) {
        $result['reload'] = true;
    }


}