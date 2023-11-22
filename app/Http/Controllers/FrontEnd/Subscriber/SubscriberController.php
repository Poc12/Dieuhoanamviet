<?php

namespace App\Http\Controllers\FrontEnd\Subscriber;

use App\Http\Controllers\FrontEndController;
use App\Models\Subscriber;
use Artesaos\SEOTools\Facades\SEOMeta;

class SubscriberController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Subscriber();
        $this->dir = __DIR__;
        $this->seo()->setTitle('Thông báo');
        SEOMeta::setKeywords('subscriber');
    }

    function validate_ajax($request) {
        $rules = [
            'email' => 'required|string|email',
        ];

        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'email' => ':attribute hợp lệ',
            'string' => ':attribute hợp lệ',
        ], [
            'email' => 'Email',
        ]);
    }


    function before_save(&$model, $request) {
        $model->email = $request->get('email');
        $model->status = 1;
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('fe.contact');
    }
}