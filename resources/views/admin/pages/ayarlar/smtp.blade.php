@extends('admin.layout.master')
@section('admin-title','Smtp Ayarları')
@section('admin-sub-header','Smtp Ayarları')
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">SMTP Ayarları</h5>
                        <ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('admin.ayarlar.home')}}" role="tab" aria-controls="justify-right-home" aria-selected="false">Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('admin.genel.ayarlar.smtp')}}" role="tab" aria-controls="justify-right-profile" aria-selected="true">SMTP</a>
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

                        <form id="form_smtp" action="{{route('admin.gene.ayarlar.smtp.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="smtp_host">SMTP Host</label>
                                    <input  value="{{getAyarlar('smtp_host')}}" name="smtp_host" type="text" class="form-control {{$errors->has('smtp_host') ? 'is-invalid':''}}" id="smtp_host" placeholder="mail.domain.com">
                                    @if($errors->has('smtp_host'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('smtp_host')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="smtp_user">SMTP Kullanıcı Adı</label>
                                    <input  value="{{getAyarlar('smtp_user')}}" name="smtp_user" type="text" class="form-control {{$errors->has('smtp_user') ? 'is-invalid':''}}" id="smtp_user" placeholder="mail@domain.com">
                                    @if($errors->has('smtp_user'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('smtp_user')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="smtp_pass">SMTP Şifre</label>
                                    <input  value="{{getAyarlar('smtp_pass')}}" name="smtp_pass" type="text" class="form-control {{$errors->has('smtp_pass') ? 'is-invalid':''}}" id="smtp_pass" placeholder="Smtp şifrenizi yazınız">
                                    @if($errors->has('smtp_pass'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('smtp_pass')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="smtp_port">SMTP Port</label>
                                    <input  value="{{getAyarlar('smtp_port')}}" name="smtp_port" type="text" class="form-control" id="smtp_port" placeholder="SMTP port yazınız">
                                    @if($errors->has('smtp_port'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('smtp_port')}}</div>
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
