@extends('admin.layout.master')
@section('admin-title','ReCaptha Ayarları')
@section('admin-sub-header','ReCaptha Ayarları')
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">ReCaptha Ayarları</h5>
                        <ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.ayarlar.home')}}" role="tab" aria-controls="justify-right-home" aria-selected="false">Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.smtp')}}" role="tab" aria-controls="justify-right-profile" aria-selected="false">SMTP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('admin.genel.ayarlar.recaptha')}}" role="tab" aria-controls="justify-right-contact" aria-selected="true">ReCaptha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{route('admin.genel.ayarlar.api')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.odeme')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ödeme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.extra')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ekstra</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-content mt-5">

                        <form id="form_smtp" action="{{route('admin.genel.ayarlar.recaptha.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="smtp_host">ReCaptcha Site Anahtarı</label>
                                    <input  value="{{getAyarlar('recaptcha_site_key')}}" name="recaptcha_site_key" type="text" class="form-control {{$errors->has('recaptcha_site_key') ? 'is-invalid':''}}" id="recaptcha_site_key" placeholder="ReCaptcha site anahtarını yazınız">
                                    @if($errors->has('recaptcha_site_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('recaptcha_site_key')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="smtp_user">ReCaptcha Gizli Anahtar</label>
                                    <input  value="{{getAyarlar('recaptcha_secret_key')}}" name="recaptcha_secret_key" type="text" class="form-control {{$errors->has('recaptcha_secret_key') ? 'is-invalid':''}}" id="recaptcha_secret_key" placeholder="ReCaptcha gizli anahtarı yazınız">
                                    @if($errors->has('recaptcha_secret_key'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('recaptcha_secret_key')}}</div>
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
