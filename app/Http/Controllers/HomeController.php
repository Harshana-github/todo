<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use domain\Facades\BannerFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $response['banners'] = BannerFacade::allActive();
        return view('pages.home.index')->with($response);
    }

    public function relationship()
    {
        $response['products'] = Product::all();
        $response['categories'] = Category::all();
        return view('pages.relationship.index')->with($response);
    }
}
