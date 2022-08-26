@extends('admin.layout.master')
@section('admin-title','Servis Ekle')
@section('admin-sub-header','Servis Ekle')
@section('admin-css')
    <link href="{{asset('assets/admin/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('admin-js')
    <script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/servisler/servisler.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/select2/i18n/tr.js')}}"></script>
@endsection
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">
                    <div class="widget-heading">
                        <h5 class="">Servis Ekle</h5>

                    </div>


                    <div class="widget-content mt-5">
                        <form action="" method="post">

                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="site_url">Ülke</label>
                                <input required  name="servis_adi" type="text" class="form-control {{$errors->has('servis_adi') ? 'is-invalid':''}}"  placeholder="Ülke yazınız">
                                @if($errors->has('site_url'))
                                    <div class="invalid-feedback" style="display: block;">{{$errors->first('site_url')}}</div>
                                @endif
                            </div>
                        </div>

                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="site_url">Kategori</label>
                                    <select id="kategori_id" class="form-control" name="kategori_id"></select>
                                    @if($errors->has('site_url'))
                                        <div class="invalid-feedback" style="display: block;">{{$errors->first('site_url')}}</div>
                                    @endif
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
