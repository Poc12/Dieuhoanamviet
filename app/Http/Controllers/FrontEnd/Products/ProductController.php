<?php

namespace App\Http\Controllers\FrontEnd\Products;

use App\Hps\eJson;
use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\CustomerLikeProduct;
use App\Models\Post;
use App\Models\ProductModel;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class ProductController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->dir = __DIR__;
        $this->response = app(eJson::class);
    }

    public function index_products($slug)
    {
        $tpl = [];
        $product = $this->model->query()->active()->typeOfficial()->where('slug', $slug)->first();
        if(!$product) {
            return eView::getInstance()->notfound();
        }
        $this->seo()->setTitle('Chi tiết sản phẩm '.$product['name']);
        SEOMeta::setKeywords($product['name']);
        $this->seo()->setDescription($product['name']);
        $this->seo()->addImages(show_img(@$product['avatar']));
        $comments = Comment::query()->where('product_id', $product['id'])->get();
        $product_new = $this->model->query()->active()->typeOfficial()->limit(3)->get();
        $tpl['product_new'] = $product_new;
        $tpl['product'] = $product;
        $tpl['comments'] = $comments;
        return eView::getInstance()->setView($this->dir, 'detail', $tpl);
    }


    function validate_ajax($request) {
        $this->model = new comment();
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'comment' => 'required|string|min:3|max:255',
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
            'comment' => 'Nội dung',
            'name' => 'Tên khách hàng',
        ]);
    }


    function before_save(&$model, $request) {
        $model->name = $request->get('name');
        $model->email = $request->get('email');
        $model->comment = $request->get('comment');
        $model->product_id = $request->get('product_id');
    }


    function result_response(&$result, $model) {
        $result['reload'] = true;
    }

    function like_action(Request $request){
        $user = auth('web')->user();
        if (!$user){
            #khách k đăng nhập có cho like k
            return $this->response->getJsonError('Đăng ký tài khoản trước khi thêm vào mục yêu thích. Cảm ơn');
        }
        else{
            $save = [
                'customer_id' => (int)$user->id,
                'product_id' => (int)$request->get('product_id')
            ];
            CustomerLikeProduct::query()->updateOrCreate([
                'customer_id' => (int)$user->id,
            ],$save);
        }
        return $this->response->getJsonSuccess('Thêm vào mục yêu thích thành công. Cảm ơn ');

    }

    public function ls_like(Request $request)
    {
        $tpl = [];
        $description = 'Trang danh sách sản phẩm trên website này là nơi tổng hợp và hiển thị tất cả các sản phẩm được cung cấp trên trang web. Tại đây, bạn có thể dễ dàng tìm kiếm và xem các sản phẩm mới nhất hoặc các sản phẩm theo danh mục, thương hiệu hoặc chủ đề.
        Trang danh sách sản phẩm trên website này là nơi tổng hợp và hiển thị tất cả các sản phẩm được cung cấp trên trang web. Tại đây, bạn có thể dễ dàng tìm kiếm và xem các sản phẩm mới nhất hoặc các sản phẩm theo danh mục, thương hiệu hoặc chủ đề.
        Chúng tôi cập nhật các sản phẩm đều đặn, đảm bảo rằng bạn luôn có sự lựa chọn đa dạng và phù hợp với nhu cầu của bạn. Trang danh sách sản phẩm được thiết kế để giúp bạn tiết kiệm thời gian và nỗ lực trong việc tìm kiếm sản phẩm bằng cách cung cấp một bộ lọc để tìm kiếm sản phẩm theo từ khóa, danh mục hoặc thương hiệu.';
        $this->seo()->setTitle('Danh sách sản phẩm');
        SEOMeta::setKeywords('Sản phẩm');
        $this->seo()->setDescription($description);
        $user = auth('web')->user();
        $count = 0;
        if ($user){
            $ls_product = Customer::query()->with('products_like')->find($user['id']);
            if (isset($ls_product['products_like'])){
                $tpl['products'] = $ls_product['products_like'];
                $count = $ls_product->products_like->count();
            }
        }
        $allCate = Category::query()->active()->where('type', Category::getInstance()->get_type_product())->get(['id', 'slug', 'name']);
        $tpl['categories'] = $allCate;
        $tpl['count'] = $count;
        return eView::getInstance()->setView($this->dir, 'list_like', $tpl);
    }


}