@extends('home.theme1.layout.master')
@section('home-content')
    <section class="page-header">
        <div class="container">
            <h2>Şifre Değiştir</h2>
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="{{route('home.index')}}">Ana Sayfa</a></li>
                <li><span>Şifre değiştir</span></li>
            </ul><!-- /.list-unstyled thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="app_auth mt-5">
        <div class="container">
            <div class="row col-md-12 m-auto g-1 col-xl-12" >
                <!-- form -->
                <div class="col-md-12 m-auto col-xl-12">
                    <div class="h-100 bg-dark-2 rounded  p-4">


                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-xl-4 offset-lg-1">
                                    <div class="ex-page-content">
                                        <h1 class="text-danger">HATA !</h1>
                                        <h4 class="mb-4">Şifre yenileme bağlantısının süresi dolmuş veya daha önce kullanılmış</h4>
                                        <p class="mb-5">Aşağıdaki butona tıklayarak yeni bir şifre hatırlatma maili isteyebilirsiniz.</p>
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{route('home.sifremi.unuttum')}}"> Şifremi unuttum</a>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-xl-4 offset-lg-1">
                                    <img src="{{asset('assets/images/error.png')}}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
