<?php

namespace App\Http\Controllers\BackEnd\Subscriber;

use App\Http\Controllers\BaseController;
use App\Http\Enum\filterEnum;
use App\Models\Subscriber;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class SubscriberController extends BaseController
{
    public function __construct()
    {
        $this->model = new Subscriber();
        $this->dir = __DIR__;
        $this->setNameBreadcrumb('Đăng kí nhận thông báo');
        $this->seo()->setTitle('Đăng kí nhận thông báo');
        SEOMeta::setKeywords('subscriber');
    }

    function _columns_table(&$tpl) {
        $lsTh = [
            ['key' => 'email', 'name' => 'Email', 'td'=> ['class' => 'text-center text-success']],
            ['key' => 'status', 'name' => 'Trạng thái', 'td'=> ['class' => 'text-center']],
            ['key' => 'created_at', 'name' => 'Ngày tạo', 'td'=> ['class' => 'text-center']],
        ];
        $tpl['lsTh'] = $lsTh;
    }

    public function columns(&$arr)
    {
        $arr = [
            ['name' => 'email', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Vui lòng nhập email'],
            ['name' => 'created_at', 'type' => filterEnum::FILTER_DATE, 'placeholder' => 'Vui lòng nhập ngày tạo'],
        ];
    }

    function _query_filter(&$query, Request $request) {
        if (check_request_field($request, 'email')) {
            $query = where_like($query,'email', $request->get('email'));
        }
        if (check_request_field($request, 'status')) {
            $query = $query->where('status', $request->get('status'));
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

    function unset_column(&$columns)
    {
        unset($columns[0]);
    }

    function input(Request $request)
    {
        $link = route('subscriber');
        return response()->redirectTo($link);
    }

}