<?php

namespace App\Http\Controllers\FrontEnd\Customer;

use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\BaseModel;
use App\Models\City;
use App\Models\Customer;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Customer();
        $this->dir = __DIR__;
        $this->seo()->setTitle('Cá nhân');
        SEOMeta::setKeywords('Customer');
        $this->seo()->setDescription('Trang danh sách khách hàng trên website này là nơi để chúng tôi hiển thị danh sách các khách hàng đã từng sử dụng sản phẩm hoặc dịch vụ của chúng tôi. Tại đây, bạn có thể tham khảo các đánh giá và nhận xét từ những khách hàng đã trải nghiệm với sản phẩm hoặc dịch vụ của chúng tôi.');
    }

    function list(Request $request){
        $tpl = [];
        $tpl['cities'] = City::all();
        return eView::getInstance()->setView($this->dir, 'profile', $tpl);
    }

    function validate_ajax($request) {
        $rules = [];
        if($request->get('change_pass')) {
            $rules['password'] = 'required|min:3';
            $rules['password_new'] = ['required','min:3', function($attribute, $value, $fail) use($request){
                if($value != $request->get('password')) {
                    return $fail('Mật khẩu nhập lại không khớp.');
                }
            }];
        }else{
            $rules = [
                'name' => 'required|string',
                'city' => 'required|numeric|exists:__cities,id',
                'districts' => 'required|numeric|exists:__districts,id',
                'ward' => 'required|numeric|exists:__wards,id',
                'address' => 'required|string',
                'description' => 'nullable|string',
                'status' => ['nullable','string', function ($attribute, $value, $fail) {
                    $status = BaseModel::getStatus($value, true);
                    if($status['id'] === -13) {
                        return $fail('Trạng thái không hợp lệ');
                    }
                }],
                'phone' => ['required', 'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/i'],
            ];
        }

        return $this->validates($request,$rules,[
            'required' => ':attribute không được để trống',
            'email' => ':attribute hợp lệ',
            'regex' => ':attribute hợp lệ',
            'unique' => ':attribute đã tồn tại',
            'string' => ':attribute hợp lệ',
            'exists' => ':attribute không tồn tại',
            'min' => ':attribute tối thiểu 3 kí tự',
            'max' => ':attribute tối đa 3 kí tự',
        ], [
            'email' => 'Tài khoản khách hàng',
            'description' => 'Mô tả',
            'phone' => 'Số điện thoại',
            'name' => 'Tên nhân viên',
            'city' => 'Tỉnh/Thành phố',
            'districts' => 'Quận/Huyện',
            'status' => 'Trạng thái',
            'address' => 'Địa chỉ chi tiết',
            'ward' => 'Xã/Phường',
            'password' => 'Mật Khẩu',
            'password_new' => 'Mật Khẩu nhập lại'
        ]);
    }


    function before_save(&$model, $request) {
        if($request->get('password')) {
            $model->password = Hash::make($request->get('password'));
        }else{
            $model->name = $request->get('name');
            $model->phone = $request->get('phone');
            $model->city_id = $request->get('city');
            $model->district_id = $request->get('districts');
            $model->ward_id = $request->get('ward');
            $model->address = $request->get('address');
            $model->description = $request->get('description');
            $model->avatar = $request->get('avatar');
        }
    }

    function result_response(&$result, $model) {
        $result['redirect'] = route('fe.customer');
    }

    function ajax_show_form_change_password() {
        $tpl = [];
        return eView::getInstance()->setView($this->dir, 'resetpass', $tpl);
    }



}