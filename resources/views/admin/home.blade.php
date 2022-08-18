@extends('admin.layout.master')
@section('admin-content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Ana Sayfa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{getAyarlar('site_name')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ana Sayfa</li>
        </ol>
    </div>

    <div class="row row-cards">

        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title">Raporlar</h5>
                </div>
                <div class="card-body">

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title">Satış Raporları</h5>
                        </div>
                        <div class="card-body">
                    <div class="row">

                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                            <div class="card bg-primary shadow-primary">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <i class="mdi mdi-cube text-white icon-size"></i>
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left text-white">Bugün</p>
                                            <div>
                                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white mb-0">
                                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                            <div class="card bg-primary shadow-primary">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <i class="mdi mdi-cube text-white icon-size"></i>
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left text-white">Bu Hafta</p>
                                            <div>
                                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white mb-0">
                                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                            <div class="card bg-primary shadow-primary">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <i class="mdi mdi-cube text-white icon-size"></i>
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left text-white">Bu Ay</p>
                                            <div>
                                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white mb-0">
                                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                            <div class="card bg-primary shadow-primary">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <i class="mdi mdi-cube text-white icon-size"></i>
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left text-white">Toplam Satış</p>
                                            <div>
                                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white mb-0">
                                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title">Genel Raporlar</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                                    <div class="card bg-primary shadow-primary">
                                        <div class="card-body">
                                            <div class="clearfix">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cube text-white icon-size"></i>
                                                </div>
                                                <div class="float-left">
                                                    <p class="mb-0 text-left text-white">Bugün</p>
                                                    <div>
                                                        <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-white mb-0">
                                                <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                                    <div class="card bg-primary shadow-primary">
                                        <div class="card-body">
                                            <div class="clearfix">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cube text-white icon-size"></i>
                                                </div>
                                                <div class="float-left">
                                                    <p class="mb-0 text-left text-white">Bu Hafta</p>
                                                    <div>
                                                        <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-white mb-0">
                                                <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                                    <div class="card bg-primary shadow-primary">
                                        <div class="card-body">
                                            <div class="clearfix">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cube text-white icon-size"></i>
                                                </div>
                                                <div class="float-left">
                                                    <p class="mb-0 text-left text-white">Bu Ay</p>
                                                    <div>
                                                        <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-white mb-0">
                                                <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
                                    <div class="card bg-primary shadow-primary">
                                        <div class="card-body">
                                            <div class="clearfix">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cube text-white icon-size"></i>
                                                </div>
                                                <div class="float-left">
                                                    <p class="mb-0 text-left text-white">Toplam Satış</p>
                                                    <div>
                                                        <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-white mb-0">
                                                <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>











    </div>






    <div class="row row-cards row-deck">
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Son İşlemler</h2>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
