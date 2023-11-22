<?php

namespace App\Http\Controllers\BackEnd\Contact;

use App\Http\Controllers\BaseController;
use App\Http\Enum\filterEnum;
use App\Models\Contacts;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function __construct()
    {
        $this->model = new Contacts();
        $this->dir = __DIR__;
        $this->setNameBreadcrumb('Liên hệ');
        $this->seo()->setTitle('Quản lý khách hàng liên hệ');
        SEOMeta::setKeywords('contact');
    }

    function _columns_table(&$tpl) {
        $lsTh = [
            ['key' => 'name', 'name' => 'Tên khách hàng', 'td'=> ['class' => 'text-center text-success']],
            ['key' => 'email', 'name' => 'Email', 'td'=> ['class' => 'text-center']],
            ['key' => 'phone', 'name' => 'Số điện thoại' , 'td'=> ['class' => 'text-center']],
            ['key' => 'content', 'name' => 'Nội dung' , 'td'=> ['class' => 'text-center']],
            ['key' => 'status', 'name' => 'Trạng thái', 'td'=> ['class' => 'text-center']],
            ['key' => 'created_at', 'name' => 'Ngày tạo', 'date' => true,  'td'=> ['class' => 'text-center']],
        ];
        $tpl['lsTh'] = $lsTh;
        $tpl['list_hidden'] = true;
    }


    function _query_filter(&$query, Request $request) {
        if (check_request_field($request, 'status')) {
            $query = $query->where('status', $request->get('status'));
        }

        if (check_request_field($request, 'email')) {
            $query = $query->where('email', $request->get('email'));
        }

        if (check_request_field($request, 'phone')) {
            $query = $query->where('phone', $request->get('phone'));
        }

        if (check_request_field($request, 'name')) {
            $query = where_like($query,'name', $request->get('name'));
        }
    }

    public function columns(&$arr)
    {
        $arr = [
            ['name' => 'phone', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Vui lòng nhập số điện thoại'],
            ['name' => 'email', 'type' => filterEnum::FILTER_SEARCH, 'placeholder' => 'Vui lòng nhập email/tài khoản'],
        ];
    }
}