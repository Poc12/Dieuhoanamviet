<?php

namespace App\Http\Controllers\FrontEnd\Categories;

use App\Hps\eView;
use App\Http\Controllers\FrontEndController;
use App\Models\Category;
use App\Models\Post;
use App\Models\ProductModel;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class CategoriesController extends FrontEndController
{
    public function __construct()
    {
        $this->model = new Category();
        $this->dir = __DIR__;
    }

    function check_list($slug){
        $categories = $this->model->active()->where('slug',$slug)->first();
        if(!$categories) {
            return eView::getInstance()->notfound();
        }
        if($categories['type']['id'] === $this->model->get_type_new()) {
           return $this->list_new($categories);
        }elseif ($categories['type']['id'] === $this->model->get_type_product()){
            return $this->list_product($categories);
        }else{
            return eView::getInstance()->notfound();
        }
    }


    function list_new($categories) {
          $tpl = [];
          $description = 'Trang danh sách bài viết trên website này là nơi tổng hợp và hiển thị tất cả các bài viết trên trang web.
           Tại đây, bạn có thể dễ dàng tìm kiếm và xem các bài viết mới nhất hoặc các bài viết theo danh mục hoặc chủ đề.
           Chúng tôi cập nhật các bài viết đều đặn, đảm bảo rằng bạn luôn có thông tin mới nhất về những chủ đề bạn quan tâm. 
           Trang danh sách bài viết được thiết kế để giúp bạn tiết kiệm thời gian và nỗ lực trong việc tìm kiếm thông tin bằng cách cung cấp một bộ lọc để tìm kiếm bài viết theo từ khóa, chủ đề hoặc danh mục.';
          $this->seo()->setTitle('Danh sách bài viết');
          $this->seo()->setDescription($description);
          SEOMeta::setKeywords('Danh sách bài viết');
          $posts = Post::query()->active()->typeOfficial()->where('category_id', $categories['id'])->with('user')->withCount('comment')->paginate('5');
          $lsPost = $posts->getCollection()->pluck('id')->toArray();
          if(!$lsPost) {
              return eView::getInstance()->notfound();
          }
          $postNew = Post::query()->active()->typeOfficial()->whereNotIn('id', $lsPost)->limit(4)->orderBy('id')->get();
          $allCate = $this->model->active()->get(['id', 'slug', 'name']);
          $alltag = $allCate->where('type', Category::getInstance()->get_type_tag());
          $categories = $allCate->where('type','<>', Category::getInstance()->get_type_tag());
          $tpl['categories'] = $categories;
          $tpl['postNew'] = $postNew;
          $tpl['posts'] = $posts;
          $tpl['alltag'] = $alltag;
          return eView::getInstance()->setView($this->dir, 'list', $tpl);
    }

    function list_product($categories) {
        $tpl = [];
        $description = 'Trang danh sách sản phẩm trên website này là nơi tổng hợp và hiển thị tất cả các sản phẩm được cung cấp trên trang web. Tại đây, bạn có thể dễ dàng tìm kiếm và xem các sản phẩm mới nhất hoặc các sản phẩm theo danh mục, thương hiệu hoặc chủ đề.
        Trang danh sách sản phẩm trên website này là nơi tổng hợp và hiển thị tất cả các sản phẩm được cung cấp trên trang web. Tại đây, bạn có thể dễ dàng tìm kiếm và xem các sản phẩm mới nhất hoặc các sản phẩm theo danh mục, thương hiệu hoặc chủ đề.
        Chúng tôi cập nhật các sản phẩm đều đặn, đảm bảo rằng bạn luôn có sự lựa chọn đa dạng và phù hợp với nhu cầu của bạn. Trang danh sách sản phẩm được thiết kế để giúp bạn tiết kiệm thời gian và nỗ lực trong việc tìm kiếm sản phẩm bằng cách cung cấp một bộ lọc để tìm kiếm sản phẩm theo từ khóa, danh mục hoặc thương hiệu.';
        $this->seo()->setTitle('Danh sách sản phẩm');
        SEOMeta::setKeywords('Sản phẩm');
        $this->seo()->setDescription($description);

        $products = ProductModel::query()->active()->with('user_like')->typeOfficial()->where('category_id', $categories['id']);
        $count = $products->count();
        $products  = $products->paginate(12);
        $allCate = $this->model->active()->where('type', Category::getInstance()->get_type_product())->get(['id', 'slug', 'name']);
        $tpl['categories'] = $allCate;
        $tpl['count'] = $count;
        $tpl['products'] = $products;
        return eView::getInstance()->setView($this->dir, 'listp', $tpl);
    }

    function ajax_save_like() {

    }

}