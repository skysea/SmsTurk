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
                <h3 class="footer-widget__title"><i class="fa fa-user"></i> Giriş Yap</h3>
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong><i class="fa-solid fa-triangle-exclamation"></i> Hata!</strong> {{Session::get('error')}}
                    </div>
                @endif
                <form action="{{route('home.login.post')}}" class="login-widget__newsletter-form" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="password">E-Posta Adresi</label>
                    <input value="{{old('email')}}" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" type="email" placeholder="E-Posta adresinizi giriniz." name="email">
                        @if($errors->has('email'))
                        <ul class="text-danger" ><li class="parsley-required">{{$errors->first('email')}}</li></ul>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Şifre</label>
                        <input class="form-control {{$errors->has('password') ? 'is-invalid':''}}" type="password" placeholder="Şifrenizi giriniz" name="password">
                        @if($errors->has('password'))
                            <ul class="text-danger" ><li class="parsley-required">{{$errors->first('password')}}</li></ul>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="g-recaptcha" data-theme="light"
                             data-sitekey="{{getAyarlar('recaptcha_site_key')}}">
                        </div>
                        @if($errors->has('g-recaptcha-response'))

                            <ul class="text-danger" ><li class="parsley-required">{{$errors->first('g-recaptcha-response')}}</li></ul>
                        @endif
                    </div>
                    <div class="form-group mb-3">

                        <button type="submit" class="thm-btn cta-one__btn ladda-button" data-style="expand-right">Giriş Yap</button>
                    </div>

                </form>
            </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/home/theme1/images/tm3.jpg')}}">
            </div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.blog-grid -->








@endsection
