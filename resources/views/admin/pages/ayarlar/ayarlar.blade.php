@extends('admin.layout.master')
@section('admin-title','Ayarlar')
@section('admin-sub-header','Ayarlar')
@section('admin-css')
    <link href="{{asset('assets/admin/plugins/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('admin-js')
    <script src="{{asset('assets/admin/plugins/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/form-fileuploads.init.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/ayarlar/genelayarlar.js')}}"></script>
@endsection
@section('admin-content')

    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Genel Ayarlar</h5>
                        <ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('admin.ayarlar.home')}}" role="tab" aria-controls="justify-right-home" aria-selected="true">Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.smtp')}}" role="tab" aria-controls="justify-right-profile" aria-selected="false">SMTP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">ReCaptha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ödeme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ekstra</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-content mt-5">
                        <div class="row">

                            <div  class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div id="div_home_logo" class="card">
                                    <div class="card-header">
                                        Ana Sayfa Logo
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" id="form_home_logo" action="javascript:void(0)">
                                    <input id="home_logo" name="home_logo" class="{{$errors->has('home_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('home_logo')}}"/>
                                    @if($errors->has('home_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('home_logo')}}</li></ul>
                                    @endif
                                    </form>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div id="div_panel_logo" class="card" >
                                    <div class="card-header">
                                        Panel Logo
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" id="form_panel_logo" action="javascript:void(0)">
                                    <input id="panel_logo" name="panel_logo" class="{{$errors->has('panel_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('panel_logo')}}"/>
                                    @if($errors->has('panel_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('panel_logo')}}</li></ul>
                                    @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div id="div_admin_panel_logo" class="card" >
                                    <div  class="card-header">
                                        Admin Panel Logo
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" id="form_admin_panel_logo" action="javascript:void(0)">
                                    <input id="admin_panel_logo" name="admin_panel_logo" class="{{$errors->has('admin_panel_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('admin_panel_logo')}}"/>
                                    @if($errors->has('admin_panel_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('admin_panel_logo')}}</li></ul>
                                    @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div id="div_favicon" class="card" >
                                    <div class="card-header">
                                        Favicon
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" id="form_favicon" action="javascript:void(0)">
                                    <input id="favicon" name="favicon" class="{{$errors->has('favicon') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('favicon')}}"/>
                                    @if($errors->has('favicon'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('favicon')}}</li></ul>
                                    @endif
                                    </form>
                                </div>
                            </div>


                        </div>



                        <form id="form_diger_ayarlar" action="{{route('admin.genel.ayarlar.genel.ayarlar.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="site_url">Site Url</label>
                                    <input required value="{{getAyarlar('site_url')}}" name="site_url" type="text" class="form-control {{$errors->has('site_url') ? 'is-invalid':''}}" id="site_url" placeholder="https://domain.com">
                                    @if($errors->has('site_url'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('site_url')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="site_name">Site Adı</label>
                                    <input required value="{{getAyarlar('site_name')}}" name="site_name" type="text" class="form-control {{$errors->has('site_name') ? 'is-invalid':''}}" id="site_name" placeholder="Site adını yazınız">
                                    @if($errors->has('site_name'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('site_name')}}</div>
                                    @endif
                                </div>
                            </div>



                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="site_title">Site Sloganı</label>
                                    <input required value="{{getAyarlar('site_title')}}" name="site_title" type="text" class="form-control {{$errors->has('site_title') ? 'is-invalid':''}}" id="site_title" placeholder="Site sloganı yazınız">
                                    @if($errors->has('site_title'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('site_title')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefon">Telefon</label>
                                    <input required value="{{getAyarlar('telefon')}}" name="telefon" type="text" class="form-control" id="telefon" placeholder="Telefon numarasını yazınız">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input required value="{{getAyarlar('whatsapp')}}" name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="Whatsapp numarasını yazınız">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-posta</label>
                                    <input required value="{{getAyarlar('email')}}" name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" id="email" placeholder="E-posta adresini yazınız">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary mt-3 "><i class="fa fa-save"></i> Kaydet</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
