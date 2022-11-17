<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Domain;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Service;
use App\Models\Service_Category;

class SitemapController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $services = Service::all();
        $products = Product::all();
        $serviceCategories = Service_Category::all();
        $productCategories = Product_Category::all();
        $view = view('client.sitemap', compact('blogs', 'services', 'products', 'serviceCategories', 'productCategories'));
        return response()->make($view, 200)->header('Content-Type', 'text/xml');
    }
}
