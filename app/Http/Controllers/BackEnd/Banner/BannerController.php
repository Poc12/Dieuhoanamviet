<?php

namespace App\Http\Controllers\BackEnd\Banner;

use App\Http\Controllers\BaseController;
use App\Http\Service\Media\UploadMediaService;
use App\Models\Banner;
use App\Models\BaseModel;
use Illuminate\Http\Request;

class BannerController extends BaseController
{
    public function __construct()
    {
        $this->model = new Banner();
        $this->upload = new UploadMediaService();
        $this->setNameBreadcrumb('Banner');
        $this->dir = __DIR__;
        $this->seo()->setTitle('Quản lý banner');
    }

    function _columns_table(&$tpl)
    {
        $lsTh = [
            ['key' => 'name', 'name' => 'Tên banner', 'td' => ['class' => 'text-center text-success']],
            ['key' => 'avatar', 'name' => 'Hình ảnh', 'img' => true, 'td' => ['class' => 'text-center']],
            ['key' => 'type', 'name' => 'Loại banner', 'td' => ['class' => 'text-center']],
            ['key' => 'stt', 'name' => 'Sắp xếp', 'td' => ['class' => 'text-center']],
            ['key' => 'status', 'name' => 'Trạng thái', 'td' => ['class' => 'text-center']],
            ['key' => 'created_at', 'name' => 'Ngày tạo', 'td' => ['class' => 'text-center']],
        ];
        $tpl['lsTh'] = $lsTh;
    }

    function after_input(&$tpl) {
        $tpl['status'] = BaseModel::getStatus();
        $tpl['types'] = $this->model->getType();
    }


    function _query_filter(&$query, Request $request)
    {
        if (check_request_field($request, 'status')) {
            $query = $query->where('status', $request->get('status', 0));
        }
        if (check_request_field($request, 'name')) {
            $query = where_like($query, 'name', $request->get('name'));
        }
    }


    function validate_ajax($request) {
        $rules = [
            'name' => 'required|string',
            'stt' => 'nullable|numeric',
            'status' => ['required','string', function ($attribute, $value, $fail) {
                $status = BaseModel::getStatus($value, true);
                if($status['id'] === -13) {
                    return $fail('Trạng thái không hợp lệ');
                }
            }],
            'type' => ['required','string', function ($attribute, $value, $fail) {
                $status = $this->model->getType($value, true);
                if($status['id'] === -13) {
                    return $fail('Loại danh mục không hợp lệ');
                }
            }],
        ];
        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'string' => ':attribute hợp lệ',
            'exists' => ':attribute không tồn tại',
        ], [
            'name' => 'Tên banner',
            'type' => 'Loại banner',
            'stt' => 'Sắp xếp',
            'status' => 'Trạng thái',
        ]);
    }


    function before_save(&$model, $request) {

        $model->name = $request->get('name');
        $model->status = $request->get('status', 0);
        $model->type = $request->get('type');
        $model->stt = $request->get('stt');
        if ($request->file('images')){
            $images = $this->upload->upload('images', true);
            $model->avatar = $images['media']['relative_link'];
        }
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('banner', ['cmd' => 'input', 'id' => $model->id]);
    }
}