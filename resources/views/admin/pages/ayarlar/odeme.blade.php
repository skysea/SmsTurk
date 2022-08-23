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
                                <a class="nav-link"  href="{{route('admin.genel.ayarlar.api')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('admin.genel.ayarlar.odeme')}}" role="tab" aria-controls="justify-right-contact" aria-selected="true">Ödeme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.extra')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ekstra</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-content mt-5">

                        <form id="form_odeme" action="{{route('admin.genel.ayarlar.odeme.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="smtp_host">Ödeme Yöntemi</label>
                                    <select name="odeme_yontemi" class="form-control" id="odeme_yontemi">
                                        <option value="" selected>-Seçiniz-</option>
                                        <option value="paytr">Paytr</option>
                                        <option value="shopier">Shopier</option>
                                    </select>
                                    @if($errors->has('odeme_yontemi'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('odeme_yontemi')}}</div>
                                    @endif
                                </div>
                                <div class="row col-md-12" id="odeme_ozellik_shopier" style="display: none">
                                    <div class="form-group col-md-12">
                                    <label for="smtp_host">Shopier Api Anahtarı</label>
                                    <input placeholder="Shopier api anahtari" value="{{getAyarlar('shopier_api_anahtari')}}" type="text" class="form-control" name="shopier_api_anahtari">
                                    @if($errors->has('shopier_api_anahtari'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('shopier_api_anahtari')}}</div>
                                    @endif
                                </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">Shopier Api Gizli Anahtarı</label>
                                        <input placeholder="Shopier api gizli anahtar" value="{{getAyarlar('shopier_api_gizli_anahtari')}}" type="text" class="form-control" name="shopier_api_gizli_anahtari">
                                        @if($errors->has('shopier_api_gizli_anahtari'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('shopier_api_gizli_anahtari')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">Shopier Site Sırası</label>
                                        <input value="{{getAyarlar('shopier_site_sirasi')}}" type="text" class="form-control" name="shopier_site_sirasi">
                                        @if($errors->has('shopier_site_sirasi'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('shopier_site_sirasi')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">Shopier Komisyon Oranı (%)</label>
                                        <input value="{{getAyarlar('shopier_komisyon_orani')}}" type="text" class="form-control" name="shopier_komisyon_orani">
                                        @if($errors->has('shopier_komisyon_orani'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('shopier_komisyon_orani')}}</div>
                                        @endif
                                    </div>


                                </div>


                                <div class="row col-md-12" id="odeme_ozellik_paytr" style="display: none">
                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">PayTR Mağaza No</label>
                                        <input value="{{getAyarlar('paytr_magaza_no')}}" type="text" class="form-control" name="paytr_magaza_no">
                                        @if($errors->has('paytr_magaza_no'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('paytr_magaza_no')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">PayTR Mağaza Anahtarı</label>
                                        <input value="{{getAyarlar('paytr_magaza_anahtari')}}" type="text" class="form-control" name="paytr_magaza_anahtari">
                                        @if($errors->has('paytr_magaza_anahtari'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('paytr_magaza_anahtari')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">PayTR Mağaza Gizli Anahtarı</label>
                                        <input value="{{getAyarlar('paytr_magaza_gizli_anahtari')}}" type="text" class="form-control" name="paytr_magaza_gizli_anahtari">
                                        @if($errors->has('paytr_magaza_gizli_anahtari'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('paytr_magaza_gizli_anahtari')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="smtp_host">PayTR Komisyon Oranı(%)</label>
                                        <input value="{{getAyarlar('paytr_komisyon_orani')}}" type="text" class="form-control" name="paytr_komisyon_orani">
                                        @if($errors->has('paytr_komisyon_orani'))
                                            <div class="invalid-feedback" style="display: block;">{{$errors->first('paytr_komisyon_orani')}}</div>
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
