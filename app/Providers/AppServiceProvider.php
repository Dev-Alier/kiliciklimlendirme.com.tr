<?php

namespace App\Providers;

use App\Http\Controllers\BlogController;
use App\Models\Address;
use App\Models\Offer;
use App\Models\Product_Category;
use App\Models\Service_Category;
use App\Models\Setting;
use App\Services\FormService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

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

            $setting = Setting::first() ?? new Setting();
            $address = Address::first() ?? new Address();
            $allServiceCategories = Service_Category::all();
            $allProductCategories = Product_Category::all();

            View::share(['setting' => $setting, 'address' => $address,'allServiceCategories'=>$allServiceCategories,'allProductCategories'=>$allProductCategories]);

        Schema::defaultStringLength(191);
        Validator::extend(
            'recaptcha',
            'App\\Validators\\ReCaptcha@validate'
     );
    }
}
