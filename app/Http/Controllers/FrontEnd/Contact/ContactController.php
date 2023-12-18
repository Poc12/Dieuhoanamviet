<?php

namespace App\Http\Controllers\FrontEnd\Contact;

use App\Http\Controllers\FrontEndController;
use App\Jobs\SendEmail;
use App\Models\Contacts;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class ContactController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Contacts();
        $this->dir = __DIR__;
        $this->seo()->setTitle('Liên hệ');
        SEOMeta::setKeywords('contacts');
        $this->seo()->setDescription('Trang liên hệ trên website này là nơi để bạn có thể liên lạc với chúng tôi để đặt câu hỏi, đề xuất hoặc gửi thông tin phản hồi. 
        Chúng tôi luôn luôn lắng nghe và trả lời mọi thắc mắc của bạn trong thời gian sớm nhất có thể. Chúng tôi cung cấp một biểu mẫu liên hệ đơn giản để bạn có thể gửi thông tin cho chúng tôi dễ dàng.
         Nếu bạn muốn gửi tài liệu hoặc thông tin liên quan đến sản phẩm hoặc dịch vụ của chúng tôi, bạn có thể gửi email đến địa chỉ được cung cấp trên trang liên hệ.');
    }

    function validate_ajax($request) {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'description' => 'nullable|string',
            'phone' => ['required', 'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/i'],
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
            'description' => 'Nội dung',
            'phone' => 'Số điện thoại',
            'name' => 'Tên khách hàng',
        ]);
    }


    function before_save(&$model, $request) {
            $model->name = $request->get('name');
            $model->email = $request->get('email');
            $model->phone = $request->get('phone');
            $model->content = $request->get('description');
            $model->status = 1;
    }

    function after_save($model){
        $data = [
            'subject' => 'Thông báo khách hàng quan tâm từ dieuhoanamviet.com.',
            'template' => 'mail.base',
            'name' => $model->name,
            'created_at' => $model->created_at,
            'phone' => $model->phone,
            'content' => $model->content,
        ];
        Mail::to('conghd.139@gmail.com')->cc('namvietdtc.ltd@gmail.com')->send(new SendEmail($data));
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('fe.contact');
    }



}