<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BackEnd\Post\PostController;
use App\Models\Customer;
use App\Models\Post;
use App\Models\ProductModel;
use App\Models\Statics;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tpl = [];
        $count_post = Post::query()->count();
        $count_customer = Customer::query()->count();
        $count_product = ProductModel::query()->count();
        $count_subscriber = Subscriber::query()->count();
        $tpl['count_post'] = $count_post;
        $tpl['count_customer'] = $count_customer;
        $tpl['count_subscriber'] = $count_subscriber;
        $tpl['count_product'] = $count_product;
        return view('home', $tpl);
    }
}
