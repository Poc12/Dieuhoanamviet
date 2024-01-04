<?php

namespace App\Providers;

use App\Hps\eCache;
use App\Http\Controllers\FrontEnd\Sitemap\SitemapController;
use App\Models\BaseModel;
use App\Models\Category;
use App\Models\Config;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Spatie\Sitemap\Sitemap;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $info = Config::query()->first();
        $menu = Menu::query()->where('status', BaseModel::getStatusActive())
            ->with(['apply_rele', 'post_static', 'parent.apply_rele', 'parent.post_static'])->get()->groupBy('type');

        $cate = Category::query()->with('child')
            ->whereHas('child')
            ->active()
            ->where('parent_id',0)
            ->where('type','=', Category::get_type_product())
            ->get();
        $sites = SitemapController::get_site_map(false);
        $sitemap = Sitemap::create();
        foreach ($sites as $site) {
            if (!empty($site)) {
                $sitemap->add($site);
            }
        }
        $sitemap->writeToFile(public_path('sitemap.xml'));

        view()->share('info', $info);
        view()->share('categories', $cate);
        view()->share('menu', $menu);

    }


}
