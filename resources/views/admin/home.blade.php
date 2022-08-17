@extends('admin.layout.master')
@section('admin-content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">{{getAyarlar('site_name')}}</a></li>
                                <li class="breadcrumb-item active">Ana Sayfa</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ana Sayfa</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-4 col-md-12">
                <div class="col-md-12 col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Satış Raporları</h4>
                        <div class="widget-chart text-center" dir="ltr">
                            <h5 class="text-muted mt-3">Toplam Satış</h5>
                            <h2>₺178</h2>

                            <div class="row mt-3">
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Bugün</p>
                                    <h4>₺12</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Bu Hafta</p>
                                    <h4>₺2487</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Bu Ay</p>
                                    <h4>₺14.5</h4>
                                </div>
                            </div> <!-- end row -->

                        </div>
                        <br>
                        <br>
                        <br>
                    </div> <!-- end card-box-->
                </div>

                </div>

                 <div class="col-xl-8 col-md-12">
                 <div class="row">
                 <div class="col-md-6 col-xl-4">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-sm bg-success rounded shadow-lg">
                                    <i class="fe-user avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Toplam Kullanıcı</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-box-->
                </div>
                    <div class="col-md-6 col-xl-4">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-sm bg-warning rounded shadow-lg">
                                    <i class="fe-message-circle avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">8947</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Aktif Destek Talebi</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-box-->
                </div>
                 <div class="col-md-6 col-xl-4">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-sm bg-info rounded shadow-lg">
                                    <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">178</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Toplam Sipariş</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-box-->
                </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card-box">
                            <h4 class="mt-0 font-16">5sim.net Bakiye</h4>
                            <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                        </div>
                    </div>
                     <div class="col-md-6 col-xl-6">
                         <div class="card-box">
                             <h4 class="mt-0 font-16">sms-activate.ru Bakiye</h4>
                             <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                         </div>
                     </div>
                </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <!-- Portlet card -->
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mb-0">Aktif Kullanıcılar</h4>
                            <p class="mb-2 text-muted">Sistemde aktif olan kullanıcıları bu tablodan görüntüleyebilirsiniz.</p>

                            <div id="cardCollpase1" class="collapse pt-3 show">
                                -
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mb-0">Son İşlemler</h4>
                            <p class="mb-2 text-muted">Sistem kullanıcılarının yaptığı son işlemleri buradaki tablodan görüntüleyebilirsiniz.</p>
                            <div id="cardCollpase2" class="collapse pt-3 show">
                               -
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->


            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div>
@endsection
