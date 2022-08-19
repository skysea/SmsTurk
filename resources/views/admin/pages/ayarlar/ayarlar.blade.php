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
                                <a class="nav-link active"   href="{{route('admin.home')}}" role="tab" aria-controls="justify-right-home" aria-selected="true">Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.home')}}" role="tab" aria-controls="justify-right-profile" aria-selected="false">SMTP</a>
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
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Ana Sayfa Logo
                                    </div>
                                    <input id="home_logo" name="home_logo" class="{{$errors->has('home_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('home_logo')}}"/>
                                    @if($errors->has('home_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('home_logo')}}</li></ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Panel Logo
                                    </div>
                                    <input id="site_logo" name="site_logo" class="{{$errors->has('site_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('panel_logo')}}"/>
                                    @if($errors->has('site_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('site_logo')}}</li></ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Admin Panel Logo
                                    </div>
                                    <input id="site_logo" name="site_logo" class="{{$errors->has('site_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('admin_panel_logo')}}"/>
                                    @if($errors->has('site_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('site_logo')}}</li></ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Favicon
                                    </div>
                                    <input id="site_logo" name="site_logo" class="{{$errors->has('site_logo') ? 'is-invalid':''}}" type="file" data-plugins="dropify" data-default-file="{{asset('assets/images').'/'.getAyarlar('favicon')}}"/>
                                    @if($errors->has('site_logo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">{{$errors->first('site_logo')}}</li></ul>
                                    @endif
                                </div>
                            </div>


                        </div>



                        <form>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="gridCheck">
                                        <label class="custom-control-label" for="gridCheck">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
