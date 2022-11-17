<?php

namespace App\Services;

use App\Models\Blogs;
use App\Models\Product_Category;
use App\Models\Service;
use App\Models\Service_Category;
use App\Services\HelperService;
use Illuminate\Database\Eloquent\Model;

class FormService
{

    protected $helperService;

    public function __construct(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }



    /**
     * Get Blog Form
     *
     * @param Abouts $about
     * @return array
     */

    public function getAboutForm($about)
    {
        $formData = '[
             {"name":"description","type":"textarea",  "label":"Hakkımızda","value":"' . $about->description . '","class":"ckeditor"}
            ]';

        return $formData;

        /**
         *  sıralamayı order ile kontrol edilmek istenirse yükarıdaki arrayin içindeki her objeye 'order': '1' şeklinde değer verilmelidir.
         */
        // return $this->helperService->FormEncode($formData);
    }



    /**
     * @param Service $service
     * @return array
     */

    public function getServiceForm($service)
    {

        $categories = Service_Category::all();
        $arr = [];
        foreach ($categories as $category) {
            $arr[] = [
                'key' => $category->id,
                'value' => $category->name
            ];
        }
        $optionsType = json_encode($arr);
        $formData = '[
            {"name":"image","type":"image", "label":"Resim","imagePath":"/assets/images/services/","image":"' . $service->image . '","class":""},
            {"name":"name","type":"text",  "label":"Hizmet Adı","value":"' . $service->name . '","class":"form-control","attributes": ""},
            {"name":"servicesCategory_id","type":"select", "label":"Kategori","value":"' . $service->servicesCategory_id . '","class":"form-select", "options":' . $optionsType . '},
            {"name":"description","type":"textarea",  "label":"İçerik","value":"' . $service->description . '","class":"ckeditor"}
           ]';
        return $formData;
    }


    /**
     * @param ServiceCategory $serviceCategory
     * @return array
     */

    public function getServiceCategoryForm($category)
    {
        $formData = '[
            {"name":"id","type":"hidden", "label":"id","value":"' . $category->id . '","class":""},
            {"name":"image","type":"image", "label":"Resim","imagePath":"/assets/images/service_categories/","image":"' . $category->image . '","class":""},
            {"name":"name","type":"text",  "label":"Kategori Adı","value":"' . $category->name . '","class":"form-control","attributes": ""},
            {"name":"description","type":"textarea",  "label":"Açıklama","value":"' . $category->description . '","class":"form-control ckeditor","attributes": ""}
            ]';
        return $formData;
    }



    /**
     * @param ProductCategory $productCategory
     * @return array
     */

    public function getProductCategoryForm($category)
    {
        $formData = '[
            {"name":"name","type":"text",  "label":"Kategori Adı","value":"' . $category->name . '","class":"form-control","attributes": ""}
           ]';
        return $formData;
    }


    /**
     * @param Product $product
     * @return array
     */

    public function getProductForm($product)
    {
        $categories = Product_Category::all();
        $arr = [];
        $arr[] = [
            'key' => null,
            'value' => "Kategori Seçiniz"
        ];
        foreach ($categories as $category) {
            $arr[] = [
                'key' => $category->id,
                'value' => $category->name
            ];
        }
        $optionsType = json_encode($arr);
        $formData = '[
            {"name":"image[]","type":"image", "label":"Resim","imagePath":"/assets/images/products/","image":"' . $product->image . '","class":"","attributes": "multiple"},
            {"name":"productsCategory_id","type":"select", "label":"Kategori","value":"' . $product->productsCategory_id . '","class":"form-select", "options":' . $optionsType . '},
            {"name":"name","type":"text",  "label":"Ürün Adı","value":"' . $product->name . '","class":"form-control","attributes": ""},
            {"name":"sku","type":"text",  "label":"Stok Kodu","value":"' . $product->sku . '","class":"form-control","attributes": ""},
            {"name":"price","type":"text",  "label":"Fiyat","value":"' . $product->price . '","class":"form-control","attributes": ""},
            {"name":"stock","type":"select", "label":"Stok Durumu","value":"' . $product->stock . '","class":"form-select", "options":[{"key":"1","value":"Var"},{"key":"0","value":"Yok"}]},
            {"name":"showcase","type":"select", "label":"Vitrinde Göster","value":"' . $product->showcase . '","class":"form-select", "options":[{"key":"1","value":"Göster"},{"key":"0","value":"Gösterme"}]},
            {"name":"description","type":"textarea",  "label":"İçerik","value":"' . $product->description . '","class":"ckeditor"},
            {"name":"oldDocument","type":"hidden", "label":"Katalog", "value":"' . $product->catalog . '","class":"form-control"},
            {"name":"id","type":"hidden", "label":"ID", "value":"' . $product->id . '","class":"form-control"}
               ]';
        return $formData;
    }


    /**
     * @param SolutionPartnerForm $solutionPartnerForm
     * @return array
     */

    public function getSolutionPartnerForm($solution)
    {

        $formData = '[
            {"name":"image","type":"image", "label":"Resim","imagePath":"/assets/images/solution_partners/","image":"' . $solution->image . '","class":"","attributes": ""}
            ]';
        return $formData;
    }


     /**
     * @param Slider $slider
     * @return array
     */
    public function getSliderForm($slider)
    {

        $formData = '[
            {"name":"image","type":"image", "label":"Resim","imagePath":"/assets/images/sliders/","image":"' . $slider->image . '","class":"","attributes": ""}
            ]';
        return $formData;
    }












    // ----------------------------------------------------------------

    /**
     * Get Blog Form
     *
     * @param Blogs $blog
     * @return array
     */

    public function getBlogForm($blog)
    {
        $formData = '[
            {"name":"image","type":"image", "label":"Resim","imagePath":"/assets/images/blogs/","image":"' . $blog->image . '","class":""},
            {"name":"title","type":"text", "label":"Başlık","value":"' . $blog->title . '","class":"form-control"},
            {"name":"description","type":"textarea",  "label":"İçerik","value":"' . $blog->description . '","class":"ckeditor"}
            ]';

        return $formData;

        /**
         *  sıralamayı order ile kontrol edilmek istenirse yükarıdaki arrayin içindeki her objeye 'order': '1' şeklinde değer verilmelidir.
         */
        // return $this->helperService->FormEncode($formData);
    }

    /**
     * Get Address Form
     *
     * @param Addresses $address
     * @return array
     */

    public function getAddressForm($address)
    {
        $formData = '[
            {"name":"email","type":"email", "order":"2",  "label":"E-posta","value":"' . $address->email . '","class":"form-control"},
            {"name":"phone","type":"text", "order":"3",  "label":"Telefon","value":"' . $address->phone . '","class":"form-control phone numeric", "attributes": "maxlength=11"},
            {"name":"address","type":"text", "order":"5",  "label":"Adres","value":"' . $address->address . '","class":"form-control"},
            {"name":"province","type":"text", "order":"6",  "label":"İl","value":"' . $address->province . '","class":"form-control"},
            {"name":"city","type":"text", "order":"7",  "label":"İlçe","value":"' . $address->city . '","class":"form-control"}
             ]';

        return $formData;
        // return $this->helperService->FormEncode($formData);
    }

    /**
     * Get Domain Form
     *
     * @param Domain $domain
     * @return array
     */
    public function getDomainForm($domain)
    {
        $formData = '[
            {"name":"name","type":"text",  "label":"Domain Adı","value":"' . $domain->name . '","class":"form-control","attributes": ""},
            {"name":"minimum_offer","type":"text",  "label":"Minimum Teklif","value":"' . $domain->minimum_offer . '","class":"form-control numeric","attributes": ""},
             {"name":"active","type":"select", "order":"4",  "label":"Durum","value":"' . $domain->active . '","class":"form-select", "options":[{"key":1,"value":"Aktif"},{"key":0,"value":"Pasif"}]},
             {"name":"activeSite","type":"select", "order":"4",  "label":"Site Var mı?","value":"' . $domain->activeSite . '","class":"form-select mt-2", "options":[{"key":0,"value":"Hayır"},{"key":1,"value":"Evet"}]}
              ]';
        return $formData;
        // return $this->helperService->FormEncode($formData);
    }

    /**
     * Get Domain Form
     *
     * @param Profile $profile
     * @return array
     */
    public function getProfileForm($user)
    {
        $formData = '[
            {"name":"name","type":"text",  "label":"İsim","value":"' . $user->name . '","class":"form-control","attributes": ""},
            {"name":"email","type":"email",  "label":"E-posta","value":"' . $user->email . '","class":"form-control","attributes": ""},
            {"name":"oldPassword","type":"password", "label":"Eski Şifre","value":"' . '' . '","class":"form-control","attributes": ""},
            {"name":"password","type":"password", "label":"Yeni Şifre","value":"' . '' . '","class":"form-control","attributes": ""}
              ]';
        return $formData;
        // return $this->helperService->FormEncode($formData);
    }

    /**
     * Get Domain Form
     *
     * @param Offers $offers
     * @return array
     */
    public function getOffersForm($data)
    {
        $formData = '[
            {"name":"minimum_offer","type":"hidden",  "label":"min_offer","value":"' . $data->minimum_offer . '","class":"form-control","attributes": "readonly"},
            {"name":"domain_name","type":"text",  "label":"Domain Adı","value":"' . $data->name . '","class":"form-control","attributes": "readonly"},
            {"name":"offer","type":"text", "label":"Teklifiniz (TL)","value":"","class":"form-control numeric", "attributes": ""},
            {"name":"name","type":"text",  "label":"İsim","value":"","class":"form-control","attributes": ""},
            {"name":"email","type":"email",  "label":"E-posta","value":"","class":"form-control","attributes": ""},
            {"name":"message","type":"textarea", "label":"Mesaj","value":"","class":"form-control","attributes":"colspan=10"},
            {"name":"phone","type":"text", "label":"Telefon","value":"","class":"form-control phone numeric", "attributes": "maxlength=11"}
            ]';
        return $formData;
        // return $this->helperService->FormEncode($formData);
    }

    /**
     * Get Settings Form
     *
     * @param Settings $settings
     * @return array
     */
    public function getSettingsForm($setting)
    {
        // {"name":"button_color","type":"colorpicker",  "label":"Buton Rengi","value":"' . $setting->button_color . '","class":"form-control button-color","attributes": ""},
        // {"name":"button_text_color","type":"colorpicker",  "label":"Buton Yazı Rengi","value":"' . $setting->button_text_color . '","class":"form-control button-text-color","attributes": ""},
        // {"name":"text_color","type":"colorpicker",  "label":"Yazı Rengi","value":"' . $setting->text_color . '","class":"form-control text-color","attributes": ""}
        $formData = '[
            {"name":"logo","type":"image",  "label":"Logo","imagePath":"/assets/images/","image":"' . $setting->logo . '","class":""},
            {"name":"site_name","type":"text",  "label":"Site Başlığı","value":"' . $setting->site_name . '","class":"form-control","attributes": ""},
            {"name":"meta_keywords","type":"text",  "label":"Anahtar Kelimeler","value":"' . $setting->meta_keywords . '","class":"form-control","attributes": ""},
            {"name":"meta_description","type":"text",  "label":"Site Açıklama","value":"' . $setting->meta_description . '","class":"form-control","attributes": ""}

            ]';
            return $formData;
        // return $this->helperService->FormEncode($formData);
    }


    /**
     * Get Domain Form
     *
     * @param Domain $domain
     * @return array
     */
    public function getBrandForm($brand)
    {
        $formData = '[
            {"name":"name","type":"text",  "label":"Marka Adı","value":"' . $brand->name . '","class":"form-control","attributes": ""},
            {"name":"minimum_offer","type":"text",  "label":"Minimum Teklif","value":"' . $brand->minimum_offer . '","class":"form-control","attributes": ""},
             {"name":"active","type":"select", "label":"Durum","value":"' . $brand->active . '","class":"form-select", "options":[{"key":0,"value":"Pasif"},{"key":1,"value":"Aktif"}]}
                  ]';
        return $formData;
        // return $this->helperService->FormEncode($formData);
    }


    /**
     * Get Domain Form
     *
     * @param Domain $domain
     * @return array
     */
    public function getFbpageForm($fb)
    {
        $formData = '[
            {"name":"platform_name","type":"select", "label":"Platform Adı","value":"' . $fb->platform_name . '","class":"form-select", "options":[{"key":"facebook","value":"Facebook"},{"key":"instagram","value":"Instagram"},{"key":"twitter","value":"Twitter"}]},
            {"name":"name","type":"text",  "label":"Sayfa Adı","value":"' . $fb->name . '","class":"form-control","attributes": ""},
            {"name":"minimum_offer","type":"text",  "label":"Minimum Teklif","value":"' . $fb->minimum_offer . '","class":"form-control","attributes": ""},
             {"name":"active","type":"select", "label":"Durum","value":"' . $fb->active . '","class":"form-select", "options":[{"key":0,"value":"Pasif"},{"key":1,"value":"Aktif"}]},
            {"name":"follow_count","type":"text",  "label":"Takipçi Sayısı","value":"' . $fb->follow_count . '","class":"form-control","attributes": ""}
                  ]';
        return $formData;
        // return $this->helperService->FormEncode($formData);
    }
}
