@extends('admin.layout.master')
@section('admin-title','Ödeme Ayarları')
@section('admin-sub-header','Ödeme Ayarları')
@section('admin-js')
    <script src="{{asset('assets/admin/assets/js/pages/ayarlar/odeme.js')}}"></script>
@endsection
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Ödeme Ayarları</h5>
                        <ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.ayarlar.home')}}" role="tab" aria-controls="justify-right-home" aria-selected="false">Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.smtp')}}" role="tab" aria-controls="justify-right-profile" aria-selected="false">SMTP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.recaptha')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">ReCaptha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{route('genel.ayarlar.api')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('genel.ayarlar.odeme')}}" role="tab" aria-controls="justify-right-contact" aria-selected="true">Ödeme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ekstra</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-content mt-5">

                        <form id="form_smtp" action="{{route('genel.ayarlar.api.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="smtp_host">Ödeme Yöntemi</label>
                                    <select name="odeme_yontemi" class="form-control" id="odeme_yontemi">
                                        <option value="0" selected>-Seçiniz-</option>
                                        <option value="paytr">Paytr</option>
                                        <option value="shopier">Shopier</option>
                                    </select>
                                    @if($errors->has('sim5_api_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('sim5_api_key')}}</div>
                                    @endif
                                </div>
                                <div class="row col-md-12" id="odeme_ozellik_shopier" style="display: none">
                                <div class="form-group col-md-12">
                                    <label for="smtp_host">Shopier Api Anahtarı</label>
                                    <input type="text" class="form-control" name="">
                                    @if($errors->has('sim5_api_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('sim5_api_key')}}</div>
                                    @endif
                                </div>
                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">Shopier Api Gizli Anahtarı</label>
                                        <input type="text" class="form-control" name="">
                                        @if($errors->has('sim5_api_key'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('sim5_api_key')}}</div>
                                        @endif
                                    </div>
                                </div>



                                <div class="row col-md-12" id="odeme_ozellik_paytr" style="display: none">
                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">PayTR Mağaza No</label>
                                        <input type="text" class="form-control">
                                        @if($errors->has('sim5_api_key'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('sim5_api_key')}}</div>
                                        @endif
                                    </div>
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
