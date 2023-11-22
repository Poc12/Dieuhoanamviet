<?php

namespace App\Http\Controllers\FrontEnd\Sitemap;

use App\Hps\eJson;
use App\Hps\eView;
use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Post;
use App\Models\ProductModel;
use App\Models\Statics;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends BaseController
{
    public function __construct()
    {
        $this->model = null;
        $this->dir = __DIR__;
        $this->response = app(eJson::class);
        $this->seo()->setTitle('Sitemap');
        SEOMeta::setKeywords('Sitemap');
    }

    function list(Request $request)
    {
        $site = $this->get_site_map();
        $tpl['sitemap'] = $site;
        return eView::getInstance()->setView($this->dir, 'sitemap', $tpl);
    }


    static function generateSitemap($websiteUrl): Sitemap
    {
       return Sitemap::create()->add($websiteUrl)
            ->writeToFile(public_path('sitemap.xml'));
    }

     static function get_site_map($return = true) {
        $domain = env('DOMAIN');
        $products = ProductModel::query()->active()->typeOfficial()->get(['id', 'slug']);
        $category = Category::query()->active()->get(['id', 'slug']);
        $posts = Post::query()->active()->typeOfficial()->get(['id', 'slug']);
        $statics = Statics::query()->active()->get(['id', 'slug']);

        $site = '';
        if(!$products->isEmpty()) {
            foreach ($products as $product){
                $site .= $domain.'/'.get_link_product($product['slug']).' ';
            }
        }

        if(!$category->isEmpty()) {
            foreach ($category as $cate){
                $site .= $domain.'/'.get_link_cate($cate['slug']).' ';
            }
        }

        if(!$posts->isEmpty()) {
            foreach ($posts as $post){
                $site .= $domain.'/'.get_link_html($post['slug']).' ';
            }
        }
        if(!$statics->isEmpty()) {
            foreach ($statics as $static){
                $site .= $domain.'/'.get_link_html($static['slug']).' ';
            }
        }
        if($return) {
            return $site;
        }else{
            return explode(' ', $site);
        }
    }


}