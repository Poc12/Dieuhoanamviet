<?php

namespace App\Http\Controllers\BackEnd\Video;

use App\Http\Controllers\BaseController;
use App\Http\Enum\filterEnum;
use App\Models\BaseModel;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class VideoController extends BaseController
{
    public function __construct()
    {
        $this->model = new Video();
        $this->dir = __DIR__;
        $this->setNameBreadcrumb('video');
        $this->seo()->setTitle('video');
        SEOMeta::setKeywords('video');
    }

    function _columns_table(&$tpl) {
        $lsTh = [
            ['key' => 'video_id', 'name' => 'ID video', 'td'=> ['class' => 'text-center text-success', 'link' => true , 'info' => true]],
            ['key' => 'link', 'name' => 'Link video', 'td'=> ['class' => 'text-center']],
            ['key' => 'name', 'name' => 'Tên video', 'td'=> ['class' => 'text-center']],
            ['key' => 'status', 'name' => 'Trạng thái', 'td'=> ['class' => 'text-center']],
            ['key' => 'created_at', 'name' => 'Ngày tạo',  'td'=> ['class' => 'text-center']],
        ];
        $tpl['lsTh'] = $lsTh;
    }

    public function columns(&$arr)
    {
        $arr = [
            ['name' => 'video_id', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Nhập ID video'],
            ['name' => 'link', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Vui lòng nhập link video'],
            ['name' => 'created_at', 'type' => filterEnum::FILTER_DATE, 'placeholder' => 'Vui lòng nhập ngày tạo'],
        ];
    }

    function _query_filter(&$query, Request $request) {
        if (check_request_field($request, 'link')) {
            $query = where_like($query,'link', $request->get('link'));
        }

        if (check_request_field($request, 'name')) {
            $query = where_like($query,'name', $request->get('name'));
        }
        if (check_request_field($request, 'status')) {
            $query = $query->where('status', $request->get('status', 0));
        }
        if (check_request_field($request, 'video_id')) {
            $query = $query->where('video_id', $request->get('video_id'));
        }

        if (check_request_field($request, 'created_at')) {
            $date = $request->get('created_at');
            if ($date) {
                $time = process_range_date($date, 'int');
                if (isset($time['time_start'])) {
                    $query = $query->where('created_at', '>=', $time['time_start'])->where('created_at', '<=', $time['time_end']);
                }
            }
        }
    }

    function after_input(&$tpl) {
        $tpl['status'] = BaseModel::getStatus();
    }

    function validate_ajax($request) {
        $rules = [
            'name' => 'required|string',
            'video_id' => 'required|string',
            'link' => ['required','string', function ($attribute, $value, $fail) {
                if (!preg_match('/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/', $value)) {
                    $fail('Link không hợp lệ');
                }
            },],
            'status' => ['nullable','string', function ($attribute, $value, $fail) {
                $status = BaseModel::getStatus($value, true);
                if($status['id'] === -13) {
                    return $fail('Trạng thái không hợp lệ');
                }
            }],
        ];


        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'regex' => ':attribute không hợp lệ',
            'unique' => ':attribute đã tồn tại',
            'string' => ':attribute hợp lệ',
        ], [
            'name' => 'Tên video',
            'video_id' => 'ID video',
            'link' => 'Link',
            'status' => 'Trạng thái',
        ]);
    }


    function before_save(&$model, $request) {
        $model->name = $request->get('name');
        $model->video_id = $request->get('video_id');
        $model->link = $request->get('link');
        $model->image = get_img_video_youtobe($request->get('video_id'));
        $model->status = $request->get('status', 0);
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('video', ['cmd' => 'input', 'id' => $model->id]);
    }

}