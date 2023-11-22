<?php

namespace App\Http\Controllers\BackEnd\Statics;

use App\Http\Controllers\BaseController;
use App\Http\Enum\filterEnum;
use App\Http\Service\Media\UploadMediaService;
use App\Models\BaseModel;
use App\Models\Category;
use App\Models\Statics;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Str;

class StaticsController extends BaseController
{
    public function __construct()
    {
        $this->model = new Statics();
        $this->upload = new UploadMediaService();
        $this->dir = __DIR__;
        $this->setNameBreadcrumb('Trang tĩnh');
        $this->seo()->setTitle('Quản lý bài viết trang tĩnh');
        SEOMeta::setKeywords('Bài viết trang tĩnh');
    }

    function _columns_table(&$tpl) {
        $lsTh = [
            ['key' => 'name', 'name' => 'Tên bài viết', 'td'=> ['class' => 'text-center text-success']],
            ['key' => 'name', 'name' => 'Danh mục', 'td'=> ['class' => 'text-center'] , 'relation' => 'category'],
            ['key' => 'name', 'name' => 'Tác giả' , 'td'=> ['class' => 'text-center'],  'relation' => 'user'],
            ['key' => 'status', 'name' => 'Trạng thái', 'td'=> ['class' => 'text-center']],
            ['key' => 'created_at', 'name' => 'Ngày tạo', 'td'=> ['class' => 'text-center']],
        ];
        $tpl['lsTh'] = $lsTh;
    }

    public function columns(&$arr)
    {
        $user = User::query()->where('status', BaseModel::getStatusActive())->get(['id', 'name'])->toArray();
        $arr = [
            ['name' => 'created_by', 'type' => filterEnum::FILTER_SELECT, 'placeholder' => 'Vui lòng nhập tác giả', 'value' => $user],
            ['name' => 'category', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Vui lòng nhập danh mục'],
            ['name' => 'created_at', 'type' => filterEnum::FILTER_DATE, 'placeholder' => 'Vui lòng nhập ngày tạo'],
        ];
    }

    function after_input(&$tpl) {
        $tpl['status'] = BaseModel::getStatus();
        $category = Category::getInstance()->active()->where('type', Category::get_type_static_page())->get(['id', 'name']);
        $tpl['category'] = $category;
        $tpl['all_tag'] = Category::getInstance()->active()->where('type', Category::get_type_tag())->get(['id', 'name']);;
        if(@$tpl['obj']['tags']) {
            $tags = json_decode($tpl['obj']['tags']);
            if($tags) {
                $tpl['tag'] = array_flip($tags);
            }
        }
    }
    function validate_ajax($request) {  // chưa validate tags
        $slug = Str::slug($request->get('name'));
        $request->offsetSet('slug', $slug);
        $rules = [
            'name' => 'required|string',
            'category_id' => 'required|numeric|exists:categories,id',
            'content' => 'required|string',
            'description' => 'required|string',
            'status' => ['required','string', function ($attribute, $value, $fail) {
                $status = BaseModel::getStatus($value, true);
                if($status['id'] === -13) {
                    return $fail('Trạng thái không hợp lệ');
                }
            }],
            'slug' => ['required','string', function ($attribute, $value, $fail) use($request) {
                $check_slug = $this->model->where('slug', $value);
                if($request->get('id')) {
                    $check_slug = $check_slug->where('id', '<>', $request->get('id'));
                }
                $check_slug = $check_slug->count();
                if($check_slug) {
                    return $fail('Tiêu đề bài viết đã tồn tại');
                }
            }],
        ];

        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'string' => ':attribute hợp lệ',
            'numeric' => ':attribute hợp lệ',
            'exists' => ':attribute không tồn tại',
        ], [
            'name' => 'Tên bài viết',
            'img' => 'Ảnh đại diện',
            'slug' => 'Bài viết',
            'category_id' => 'Danh mục',
            'description' => 'Mô tả ngẵn',
            'content' => 'Nội dung',
            'status' => 'Trạng thái',
            'tags' => 'Tags',
        ]);
    }


    function before_save(&$model, $request) {
        $model->name = $request->get('name');
        $model->slug = $request->get('slug');
        $model->status = $request->get('status', 0);
        $model->category_id = $request->get('category_id');
        $model->description = $request->get('description');
        $model->content = $request->get('content');
        $model->created_by = @auth()->id();
        $model->tags = json_encode($request->get('tags'));
        if ($request->file('images')){
            $images = $this->upload->upload('images', true);
            $model->avatar = $images['media']['relative_link'];
        }
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('statics', ['cmd' => 'input', 'id' => $model->id]);
    }





}