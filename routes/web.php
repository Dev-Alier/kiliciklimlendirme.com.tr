<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);




Route::get('/admin', function () {
    return view('admin.errors.404');
});

/**
 * @param Client Routes
 */

Route::group(['prefix' => '/'], function () {
    Route::controller(App\Http\Controllers\Client\HomeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/hakkimizda', 'about');
        Route::get('/hizmetler/{slug}', 'serviceList')->name('service.list');
        Route::get('/hizmet-detay/{slug}/', 'serviceDetail')->name('service.detail');
        Route::get('/urunler/{slug}', 'productList')->name('product.list');
        Route::get('/urun-detay/{slug}', 'productDetail')->name('product.detail');
        Route::get('/cozum-ortaklari', 'partnerList')->name('partner.list');
        Route::get('/sayfalar', 'pages')->name('page.list');
        Route::get('/iletisim', 'contact');
        Route::get('/blog', 'blogList')->name('blog.list');
        Route::get('/blog/{slug}', 'blogDetail')->name('blog.detail');
        Route::match(['get', 'post'], '/domainler/arama/{filter?}', 'domainSearchList');
    });
});

/**
 * @param Sitemap Routes
 */

Route::get('/sitemap.xml', [App\Http\Controllers\Client\SitemapController::class, 'index']);


/**
 * @param Admin Routes
 */

Route::group(['prefix' => ''], function () {
    Route::get('/panel', [App\Http\Controllers\HomeController::class, 'root'])->name('root');



    /**
     * @param Profile Routes
     */
    Route::group(['prefix' => 'panel'], function () {

        /**
         * @param Abouts Routes
         */
        Route::controller(App\Http\Controllers\Admin\AboutController::class)->prefix('hakkimizda')->middleware('auth')->group(function () {
            Route::get('/', 'edit')->name('about');
            Route::post('/', 'saveData')->name('post.about');
        });

        /**
         * @param Services Routes
         */
        Route::controller(App\Http\Controllers\Admin\ServiceController::class)->prefix('hizmetler')->middleware('auth')->group(function () {
            Route::get('/', 'getList')->name('list.service');
            Route::get('/hizmet-ekle', 'getAddService')->name('add.service');
            Route::post('/hizmet-ekle', 'save')->name('add.service.post');
            Route::get('/hizmet-duzenle/{id}', 'getEditService')->name('edit.service');
            Route::delete('/delete/{id}', 'deleteService')->name('delete.service');
        });
        /**
         * @param Services Routes
         */
        Route::controller(App\Http\Controllers\Admin\ServiceCategoryController::class)->prefix('hizmetler-kategori')->middleware('auth')->group(function () {
            Route::get('/', 'getList')->name('list.serviceCategory');
            Route::get('/ekle', 'addServiceCategory')->name('add.serviceCategory');
            Route::post('/ekle', 'save')->name('add.post.serviceCategory');
            Route::get('/duzenle/{id}', 'getEditServiceCategory')->name('edit.serviceCategory');
            Route::delete('/delete/{id}', 'deleteServiceCategory')->name('delete.serviceCategory');
        });



        /**
         * @param Products Routes
         */
        Route::controller(App\Http\Controllers\Admin\ProductController::class)->prefix('ürünler')->middleware('auth')->group(function () {
            Route::get('/', 'getList')->name('list.product');
            Route::get('/ürün-ekle', 'getAddProduct')->name('add.product');
            Route::post('/ürün-ekle', 'save')->name('add.product.post');
            Route::get('/ürün-duzenle/{id}', 'getEditProduct')->name('edit.product');
            Route::delete('/delete/{id}', 'deleteProduct')->name('delete.product');
            Route::delete('/deleteImage/{id}', 'deleteImage')->name('delete.image');
            Route::get('/ürün-katalog/{slug}', 'productCatalog')->name('detail.catalog');

        });

        /**
         * @param ProductCategory Routes
         */
        Route::controller(App\Http\Controllers\Admin\ProductCategoryController::class)->prefix('ürünler-kategori')->middleware('auth')->group(function () {
            Route::get('/{id?}', 'getList')->name('list.productCategory');
            Route::post('/ekle', 'save')->name('add.productCategory');
            Route::delete('/delete/{id}', 'deleteProductCategory')->name('delete.productCategory');
        });

        /**
         * @param SolutionPartners Routes
         */
        Route::controller(App\Http\Controllers\Admin\SolutionPartnerController::class)->prefix('çözüm-ortakları')->middleware('auth')->group(function () {
            Route::get('/', 'getList')->name('list.solutionPartner');
            Route::post('/ekle', 'save')->name('add.solutionPartner');
            Route::delete('/delete/{id}', 'deleteSolutionPartner')->name('delete.SolutionPartner');
        });


        /**
         * @param Sliders Routes
         */
        Route::controller(App\Http\Controllers\Admin\SliderController::class)->prefix('slider')->middleware('auth')->group(function () {
            Route::get('/', 'getList')->name('list.slider');
            Route::post('/ekle', 'save')->name('add.slider');
            Route::delete('/delete/{id}', 'deleteSlider')->name('delete.slider');
        });

        /**
         * @param Blog Routes
         */
        Route::controller(App\Http\Controllers\Admin\BlogController::class)->prefix('blog')->middleware('auth')->group(function () {
            Route::get('/blog-listesi', 'getList')->name('blog.list');
            Route::get('/blog-ekle', 'getAddBlog')->name('add.blog');
            Route::post('/blog-ekle', 'save')->name('add-blog-post');
            Route::get('/blog-duzenle/{id}', 'getEditBlog')->name('edit-blog');
            Route::delete('/delete/{id}', 'deleteBlog')->name('delete.blog');
        });


        /**
         * @param Profile Routes
         */

        Route::controller(App\Http\Controllers\Admin\ProfileContoller::class)->prefix('profil')->middleware('auth')->group(function () {
            Route::get('/', 'edit')->name('profile');
            Route::post('/', 'saveData')->name('post.profile');
        });


        /**
         * @param Address Routes
         */
        Route::controller(App\Http\Controllers\Admin\AddressController::class)->prefix('adres')->middleware('auth')->group(function () {
            Route::get('/', 'edit')->name('address');
            Route::post('/', 'saveData')->name('post.address');
        });




        /**
         * @param Settings Routes
         */

        Route::controller(App\Http\Controllers\Admin\SettingsController::class)->prefix('site-ayarlari')->middleware('auth')->group(function () {
            Route::get('/', 'edit')->name('settings');
            Route::post('/', 'saveData')->name('post.settings');
        });
    });
});
