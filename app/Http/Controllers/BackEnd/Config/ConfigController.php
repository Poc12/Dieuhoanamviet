<?php

namespace App\Http\Controllers\BackEnd\Config;

use App\Hps\eView;
use App\Http\Controllers\BaseController;
use App\Models\Config;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class ConfigController extends BaseController
{
    public function __construct()
    {
        $this->model = new Config();
        $this->dir = __DIR__;
        $this->setNameBreadcrumb('Cấu hình website');
        $this->seo()->setTitle('Quản lý cấu hình website');
        SEOMeta::setKeywords('Cấu hình website');
    }

    function list(Request $request)
    {
        $tpl = [];
        $info = $this->model->first();
        $tpl['obj'] = $info;
        $this->get_log(1, $tpl);
        return eView::getInstance()->setView($this->dir, 'list', $tpl);
    }

    /**
     * @throws \Exception
     */

    function validate_ajax($request) {
        $rules = [
            'address' => 'required|string',
            'email' => 'required|email|min:3|max:64',
            'phone' => ['required', 'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/i'],
            'facebook' => 'nullable|string',
            'zalo' => 'nullable|string',
            'youtobe' => 'nullable|string',
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
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ chi tiết',
            'facebook' => 'Facebook',
            'zalo' => 'Zalo',
            'youtobe' => 'Youtobe',
        ]);
    }


    function before_save(&$model, $request) {
        $model->email = $request->get('email');
        $model->phone = $request->get('phone');
        $model->address = $request->get('address');
        $model->facebook = $request->get('facebook');
        $model->zalo = $request->get('zalo');
        $model->youtobe = $request->get('youtobe');
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('config');
    }



}