<footer id="footer-main" class="footer-main container-fluid">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- Widget Address -->
            <aside class="col-md-6 ftr-widget text-center widget_about">
                <a href="index.html" title="Max Shop">
                    <img src="{{ asset('assets/images/'.$setting->logo) }}" width="300" alt="">
                </a>
                <div class="info">
                    <ul class="list">
                        <li><a href="tel:{{ $address->phone }}">{{ $address->phone }}</a></li>
                        <li><a href="mailto:{{ $address->email }}">{{ $address->email }}</a></li>
                    </ul>
                </div>
                <div class="address">
                    <span>Adres</span>
                    {{ $address->address .' '. $address->province.'/'.$address->city }}
                </div>
            </aside><!-- Widget Address /- -->

            <!-- Widget About -->
            <aside class="col-md-6 ftr-widget widget_links widget_about">
                <a href="index.html" class="text-center w100" title="Max Shop">Biz Kimiz</a>
                <div class="info">
                    1994 yılında İsmet KAYA tarafından İstanbul’da kurularak “Çağdaş Hırdavat” adıyla ticari hayatımıza
                    başladık. Faaliyetlerimize 16 yıl boyunca başarılı bir şekilde devam etmemizin ardından 2010 yılında
                    “Çağdaş Yapı Malzemeleri” markasıyla kurumsal bir kimliği oluşturmaya çalıştık.
                </div>
            </aside><!-- Widget About /- -->



        </div>
        <div class="copyright-section text-center">
            <div class="coyright-content">
                <p>&copy; 2022 {{ date('Y') != 2022 ? '-' . ' ' . date('Y') : '' }} - kiliciklimlendirme. Tüm Hakları
                    Saklıdır</p>
                <p>Bu site Ali ER tarafından hazırlanmıştır.</p>
            </div>

        </div>
    </div><!-- Container /- -->
</footer>
