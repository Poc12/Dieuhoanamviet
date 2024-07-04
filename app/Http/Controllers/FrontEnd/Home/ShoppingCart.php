<?php

namespace App\Http\Controllers\FrontEnd\Home;

use App\Hps\eJson;
use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\ProductModel;
use App\Models\PurchaseOrderModel;
use Artesaos\SEOTools\Facades\SEOMeta;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ShoppingCart extends FrontEndController
{

    public function __construct()
    {
        $this->dir = __DIR__;
        $this->per_page = 8;
        $this->seo()->setTitle('Trang chủ');
        SEOMeta::setKeywords('Trang chủ');
        $this->seo()->setDescription('Trang chủ của website này là nơi đầu tiên mà khách hàng sẽ đến khi truy cập vào trang web của chúng tôi. Tại đây, bạn sẽ tìm thấy một tầm nhìn tổng quan về sản phẩm hoặc dịch vụ của chúng tôi cùng với những thông tin mới nhất và những sản phẩm được quảng cáo đặc biệt.');
    }

    function list(Request $request)
    {
        $tpl = [];
        $cart = unserialize($_COOKIE['shopping_cart']);
        $tpl['cart'] = $cart;
        $tpl['total'] = count($cart);
        return eView::getInstance()->setView($this->dir, 'cart', $tpl);
    }

    function ajax_save_order(Request $request)
    {
        $product = $request->get('product_id');
        if (!$product){
            eJson::getInstance()->getJsonSuccess('Thêm sản phẩm để thanh toán', []);
        }
        foreach ($product as $item){
            PurchaseOrderModel::query()->insert([
                'product_id' => $item,
                'price' => 0,
                'real_price' => 0,
                'created_at' => time(),
                'status' => 'Chờ giao hàng'
            ]);
        }
        unset($_COOKIE['shopping_cart']);
        eJson::getInstance()->getJsonSuccess('Đặt hàng thành công', []);
    }

    public function add_cart(Request $request)
    {

        $prod_id = $request->input('product_id'); #id sản phẩm
        $quantity = $request->input('quantity');
        if(isset($_COOKIE['shopping_cart']))
        {
            $cart_data = unserialize($_COOKIE['shopping_cart']);
        }
        else
        {
            $cart_data = array();
        }
        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;
        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = serialize($cart_data);
                    setcookie('shopping_cart', $item_data, time()+60*60*3);
                    eJson::getInstance()->getJsonSuccess('Lưu thông tin thành công', $item_data);
                }
            }
        }
        else
        {
            $products = ProductModel::query()->find($prod_id);
            $prod_name = $products->name;
            $prod_image = images_src($products->avatar) ;
            $priceval = $products->price;
            if($products)
            {
                $item_array = array(
                    'item_id' => (int)$prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = serialize($cart_data); # mã hoá data
                setcookie('shopping_cart', $item_data, time()+60*60*3); #sống 3 tiếng
                eJson::getInstance()->getJsonSuccess('Lưu thông tin thành công', $item_data);
            }
        }
    }

    function load_cart()
    {

        if(isset($_COOKIE['shopping_cart']))
        {
            $cart_data = unserialize($_COOKIE['shopping_cart']); #giải mã data
            $totalcart = count($cart_data);
            $item_data = [
                'total' => $totalcart,
                'data' => $cart_data
            ];
            eJson::getInstance()->getJsonSuccess('Thành công', $item_data);
        }
        else
        {
            $item_data = ['total' => 0];
            eJson::getInstance()->getJsonSuccess('Thành công', $item_data);
        }
    }

}