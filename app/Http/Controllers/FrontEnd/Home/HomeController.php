<?php

namespace App\Http\Controllers\FrontEnd\Home;

use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\ProductModel;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends FrontEndController
{
    public function __construct()
    {
        $this->dir = __DIR__;
        $this->per_page = 8;
        $this->seo()->setTitle('Trang chủ');
        SEOMeta::setKeywords('Trang chủ');
        $this->seo()->setDescription('Trang chủ của website này là nơi đầu tiên mà khách hàng sẽ đến khi truy cập vào trang web của chúng tôi. Tại đây, bạn sẽ tìm thấy một tầm nhìn tổng quan về sản phẩm hoặc dịch vụ của chúng tôi cùng với những thông tin mới nhất và những sản phẩm được quảng cáo đặc biệt.');
    }

    function list(Request $request){
        $banner = Banner::query()->active()->get();
        $trending_product= ProductModel::query()->with('category')->typeOfficial()->active()->orderBy('stt')->limit(6)->get();
        $new_product = ProductModel::query()->typeOfficial()->active()->orderByDesc('created_at')->limit(3)->get();
        $pluck = [];
        if(!$trending_product->isEmpty()) {
            $pluck = $trending_product->pluck('id')->toArray();
        }
        $recommended = ProductModel::query()->with('category')
            ->withCount('like')
            ->typeOfficial()->active()->whereNotIn('id', $pluck)->orderBy('stt')->get();
        $all_product = ProductModel::query()
            ->typeOfficial()
            ->active();
        $this->fillter_query($all_product,$request);
        $all_product = $all_product->paginate($this->per_page);
        $all_category = Category::query()->typeProduct()->active()->orderByDesc('created_at')->get();
        $posts = Post::query()->typeOfficial()->active()->limit(10)->get();
        $videos = Video::query()->active()->limit(10)->get();
        $tpl = [
            'product' => $all_product,
            'banners' => $banner,
            'trending_product' => $trending_product,
            'recommended' => $recommended,
            'videos' => $videos,
            'posts' => $posts,
            'category' => $all_category,
            'new_product' => $new_product
        ];
        return eView::getInstance()->setView($this->dir, 'home', $tpl);
    }

    public function fillter_query(&$list,Request $request){
        if ($request->get('search')){
            $list = $list->where('name','LIKE','%'.$request->get('search').'%');
        }
        if ($request->get('price')){
            $price = explode('-',$request->get('price'));
            $form = isset($price[0]) ? (int)$price[0] : 0;
            $to = isset($price[1]) ? (int)$price[1] : 0;
            $list = $list->whereBetween('sell_price',[$form,$to]);
        }
    }





}