<section class="banner-one" id="home">

    <img src="{{asset('assets/home/theme1/images/shapes/banner-shape-1-1.png')}}" class="banner-one__bg-shape-1" alt="">
    <img src="{{asset('assets/home/theme1/images/shapes/banner-shape-1-2.png')}}" class="banner-one__bg-shape-2" alt="">
    <img src="{{asset('assets/home/theme1/images/shapes/banner-shape-1-3.png')}}" class="banner-one__bg-shape-3" alt="">
    <img src="{{asset('assets/home/theme1/images/shapes/banner-shape-1-4.png')}}" class="banner-one__bg-shape-4" alt="">
    <img src="{{asset('assets/home/theme1/images/shapes/banner-shape-1-5.png')}}" class="banner-one__bg-shape-5" alt="">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="my-auto">
                    <div class="banner-one__content">
                        <h3>SMS <br> Almaya Başlayın </h3>
                        <p>Sitemizi kullanarak tüm web sitelerinde ve mobil uygulamalarda geçerli, SMS Kodu alın. Bir çok ülkeden numara alabilirsiniz.</p>
                        @if(!auth()->user())
                        <a  href="{{route('home.login')}}" class="thm-btn banner-one__btn"><span><i class="fa fa-home"></i> Giriş Yap</span></a>
                        <a href="{{route('home.register')}}" class="thm-btn banner-one__btn"><span><i class="fa fa-user-plus"></i> Kayıt Ol</span></a>
                        @else
                            <a href="#" class="thm-btn banner-one__btn"><span><i class="fa fa-user"></i> Müşteri Paneli</span></a>
                        @endif
                        <!-- /.thm-btn banner-one__btn -->
                    </div><!-- /.banner-one__content -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 d-flex justify-content-end wow fadeInUp" data-wow-duration="1500ms">
                <div class="banner-one__image">
                    <img src="{{asset('assets/home/theme1/images/resources/banner-1-moc-1.png')}}" alt="">
                </div>


            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner-one -->
