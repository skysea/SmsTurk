@extends('admin.layout.master')
@section('admin-title','Ekstra')
@section('admin-sub-header','Ekstra')
@section('admin-js')
    <script src="{{asset('assets/admin/assets/js/pages/ayarlar/odeme.js')}}"></script>
@endsection
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Ekstra</h5>
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
                                <a class="nav-link"   href="{{route('admin.genel.ayarlar.odeme')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ödeme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"   href="{{route('admin.genel.ayarlar.extra')}}" role="tab" aria-controls="justify-right-contact" aria-selected="false">Ekstra</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-content mt-5">

                        <form id="form_odeme" action="{{route('admin.genel.ayarlar.extra.kaydet')}}" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="smtp_host">Ekstra Header Kodu</label>
                                    <textarea name="extra_header" rows="5" class="form-control">{{getAyarlar('extra_header')}}</textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="smtp_host">Ekstra Footer Kodu</label>
                                    <textarea  name="extra_footer" rows="5" class="form-control">{{getAyarlar('extra_footer')}}</textarea>

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
