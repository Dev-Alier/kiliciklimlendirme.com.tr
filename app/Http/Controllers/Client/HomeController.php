<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Domain;
use App\Models\Fbpage;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Service;
use App\Models\Service_Category;
use App\Models\Slider;
use App\Models\Solution_Partner;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function __construct(
        private FormService         $formService        = new FormService(new HelperService()),
        private CommonService       $commonService      = new CommonService(),
        private HelperService       $helperService      = new HelperService(),
        private Slider              $slider             = new Slider(),
        private Service_Category    $service_Category   = new Service_Category(),
        private Product             $product            = new Product(),
        private Product_Category    $product_Category   = new Product_Category(),
        private Blog                $blog               = new Blog(),
        private Solution_Partner    $solution_Partner   = new Solution_Partner(),
        private Service             $service            = new Service(),
    ) {
    }

    public function index()
    {
        $sliders = $this->slider::orderBy('id', 'DESC')->get();
        $services = $this->service_Category::orderBy('id', 'DESC')->take(5)->get();
        $products = $this->product::whereShowcase(true)->orderBy('id', 'DESC')->take(12)->get();
        $blogs = $this->blog->orderBy('id', 'DESC')->take(3)->get();
        $partners = $this->solution_Partner->orderBy('id', 'DESC')->get();
        return view('client.index',compact('sliders','services','products','blogs','partners'));
    }

    public function serviceList($slug){
        $service = $this->service_Category::whereSlug($slug)->get();
        $serviceName = $service[0]->name;
        $services = $this->service->where('servicesCategory_id',$service[0]->id)->orderBy('created_at', 'DESC')->get();
        return view('client.services.list',compact('services','serviceName'));
    }

    public function serviceDetail($slug){
        $service = $this->service->whereSlug($slug)->first();
        return view('client.services.detail',compact('service'));
    }

    public function productList($slug){
        $category = $this->product_Category::whereSlug($slug)->get();
        $catName = $category[0]->name;
        $products = $this->product->where('productsCategory_id',$category[0]->id)->orderBy('created_at', 'DESC')->get();
        return view('client.products.list',compact('products','catName'));
    }

    public function productDetail($slug){
        $product = $this->product->whereSlug($slug)->first();
        return view('client.products.detail',compact('product'));
    }

    public function partnerList(){
        $partners = Solution_Partner::all();
        return  view('client.solution-partners.list',compact('partners'));
    }

    public function about(){
        $about = About::first();
        return view('client.about',compact('about'));
    }

    public function blogList(){
        $blogs = $this->blog->orderBy('created_at','DESC')->get();
        return view('client.blogs.list',compact('blogs'));
    }


    public function blogDetail($slug){
        $blog = $this->blog->whereSlug($slug)->first();
        $otherBlogs = Blog::where('slug', '!=', $slug)->orderBy('created_at', 'DESC')->take(4)->get();
        return view('client.blogs.blog-detail',compact('blog','otherBlogs'));
    }

    public function contact(){
        return view('client.contact');
    }


}
