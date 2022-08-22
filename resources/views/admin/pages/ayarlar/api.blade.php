@extends('admin.layout.master')
@section('admin-title','API Ayarları')
@section('admin-sub-header','API Ayarları')
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">API Ayarları</h5>
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
                                <a class="nav-link active"  href="{{route('genel.ayarlar.api')}}" role="tab" aria-controls="justify-right-contact" aria-selected="true">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('genel.ayarlar.odeme')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ödeme</a>
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
                                <div class="form-group col-md-6">
                                    <label for="smtp_host">5sim.net API Anahtarı</label>
                                    <input  value="{{getAyarlar('sim5_api_key')}}" name="sim5_api_key" type="text" class="form-control {{$errors->has('sim5_api_key') ? 'is-invalid':''}}" id="sim5_api_key" placeholder="5sim.net api key anahtarını yazınız">
                                    @if($errors->has('sim5_api_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('sim5_api_key')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="smtp_user">Sms-Activate.org API Anahtarı</label>
                                    <input  value="{{getAyarlar('sms_actvice_api_key')}}" name="sms_actvice_api_key" type="text" class="form-control {{$errors->has('sms_actvice_api_key') ? 'is-invalid':''}}" id="sms_actvice_api_key" placeholder="sms-active.org api key anahtarı">
                                    @if($errors->has('sms_actvice_api_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('sms_actvice_api_key')}}</div>
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
