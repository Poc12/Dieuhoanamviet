<?php

namespace App\Http\Controllers\FrontEnd\Categories;

use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\Category;
use App\Models\Post;
use App\Models\ProductModel;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class CategoriesController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Category();
        $this->dir = __DIR__;
    }

    function check_list($slug){
        $categories = $this->model->active()->where('slug',$slug)->first();
        if(!$categories) {
            return eView::getInstance()->notfound();
        }
        if($categories['type']['id'] === $this->model->get_type_new()) {
           return $this->list_new($categories);
        }elseif ($categories['type']['id'] === $this->model->get_type_product()){
            return $this->list_product($categories);
        }else{
            return eView::getInstance()->notfound();
        }
    }


    function list_new($categories) {
          $tpl = [];
          $description = '...';
          $this->seo()->setTitle('Danh sách bài viết');
          $this->seo()->setDescription($description);
          SEOMeta::setKeywords('Danh sách bài viết');
          $posts = Post::query()->active()->typeOfficial()->where('category_id', $categories['id'])->with('user')->withCount('comment')->paginate('5');
          $lsPost = $posts->getCollection()->pluck('id')->toArray();
          if(!$lsPost) {
              return eView::getInstance()->notfound();
          }
          $postNew = Post::query()->active()->typeOfficial()->whereNotIn('id', $lsPost)->limit(4)->orderBy('id')->get();
          $allCate = $this->model->active()->get(['id', 'slug', 'name']);
          $alltag = $allCate->where('type', Category::getInstance()->get_type_tag());
          $categories = $allCate->where('type','<>', Category::getInstance()->get_type_tag());
          $tpl['categories'] = $categories;
          $tpl['postNew'] = $postNew;
          $tpl['posts'] = $posts;
          $tpl['alltag'] = $alltag;
          return eView::getInstance()->setView($this->dir, 'list', $tpl);
    }

    function list_product($categories) {
        $tpl = [];
        $description = '...';
        $this->seo()->setTitle('Danh sách sản phẩm');
        SEOMeta::setKeywords('Sản phẩm');
        $this->seo()->setDescription($description);

        $products = ProductModel::query()->active()->with('user_like')->typeOfficial()->where('category_id', $categories['id']);
        $count = $products->count();
        $products  = $products->paginate(12);
        $allCate = $this->model->active()->where('type', Category::getInstance()->get_type_product())->get(['id', 'slug', 'name']);
        $tpl['category'] = $allCate;
        $tpl['count'] = $count;
        $tpl['product'] = $products;
        return eView::getInstance()->setView($this->dir, 'listp', $tpl);
    }

    function ajax_save_like() {

    }

}