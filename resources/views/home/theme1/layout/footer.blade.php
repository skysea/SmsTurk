<footer class="site-footer" id="footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="footer-widget footer-widget__about">
                        <a href="{{route('home.index')}}" class="logo">
                            <img src="{{asset('assets/images/').'/'.getAyarlar('home_logo')}}" width="136" alt="">
                        </a>
                        <p>Sms doğrulaması için sanal numara satın alın.<br> amazon, discord, naver, instagram, whatsapp, google'da hemen sms alın <br>ve hesabınızı onaylayın.</p>

                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-lg-4 -->
                <div class="col-xl-2 col-lg-6">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Linkler</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links-list">
                            <li><a href="#features">Özellikler</a></li>
                            <li><a href="#nasil-calisir">Nasıl Çalışır</a></li>
                            <li><a href="#faq">S.S.S</a></li>
                            <li><a href="#testimonials">Yorumlar</a></li>
                            <li><a href="#blog">Blog</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget footer-widget__links -->
                </div><!-- /.col-lg-2 -->
                <div class="col-xl-2 col-lg-6">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">İletişim</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <i class="fa fa-phone-square"></i>
                                <a href="tel:{{getAyarlar('telefon')}}">{{getAyarlar('telefon')}}</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{getAyarlar('email')}}">{{getAyarlar('email')}}</a>
                            </li>
                            @if(getAyarlar('adres'))
                            <li>
                                <i class="fa fa-map-marker"></i>
                                {{getAyarlar('adres')}}
                            </li>
                            @endif
                        </ul><!-- /.footer-widget__contact-list list-unstyled -->
                    </div><!-- /.footer-widget footer-widget__contact -->
                </div><!-- /.col-lg-2 -->
                <div class="col-xl-4 col-lg-6">
                    <div class="footer-widget footer-widget__newsletter">
                        <h3 class="footer-widget__title">Bülten</h3>
                        <form action="#" class="footer-widget__newsletter-form">
                            <input type="text" placeholder="Email address" name="email">
                            <button type="submit"><i class="fa fa-envelope"></i></button>
                        </form><!-- /.footer-widget__newsletter-form -->
                        <p>En son haberlerimiz ve makalelerimiz için kaydolun.</p>
                    </div><!-- /.footer-widget footer-widget__newsletter -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="inner-container">
                <p>{{getAyarlar('footer_text')}}</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div><!-- /.footer-social -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer -->
