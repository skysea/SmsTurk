@extends('home.theme1.layout.master')


@section('home-content')
    <section class="page-header">
        <div class="container">
            <h2>Giriş</h2>
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index.html">Ana Sayfa</a></li>
                <li><span>Giriş</span></li>
            </ul><!-- /.list-unstyled thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->




    <section class="blog-grid">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
            <div class="footer-widget footer-widget__newsletter">
                <h3 class="footer-widget__title">Giriş Yap</h3>
                <form action="#" class="login-widget__newsletter-form" method="post">
                    <div class="form-group mb-3">
                    <input class="form-control" type="email" placeholder="Email adresinizi yazınız" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" placeholder="Şifrenizi yazınız" name="sifre">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" placeholder="Şifrenizi yazınız" name="sifre">
                    </div>
                    <div class="form-group mb-3">

                        <button type="submit" class="thm-btn cta-one__btn">Giriş Yap</button>
                    </div>

                </form>
            </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="https://demo.smsonayscripti.com/assets/theme-1/img/photos/tm3.jpg">
            </div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.blog-grid -->








@endsection
