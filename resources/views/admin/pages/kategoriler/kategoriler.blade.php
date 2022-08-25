@extends('admin.layout.master')
@section('admin-title','Kategoriler')
@section('admin-sub-header','Kategoriler')
@section('admin-css')
    <link href="{{asset('assets/admin/plugins/table/datatable/datatables.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/table/datatable/dataTables.checkboxes.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/jquery-confirm/jquery-confirm.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('admin-js')

    <script src="{{asset('assets/admin/plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/table/datatable/dataTables.checkboxes.min.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/kategoriler/kategoriler.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/jquery-confirm/jquery-confirm.min.js')}}"></script>
    <script>
        $(".imgicon").click(function (){

            var iconname = $(this).data("imgname");
            $("input[name=kategori_icon]").val(iconname);
            $("#modaliconSec").modal('hide');
            $("#svg1").attr('data','{{asset('assets/images/kategori_icon').'/'}}'+iconname);
        });

    </script>
@endsection
@section('admin-content')
    <div class="layout-px-spacing">
        <div class="row sales layout-top-spacing">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">
                    <div class="widget-heading">
                        <h5 class="">Kategoriler</h5>

                    </div>


                    <div class="widget-content mt-5">
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('admin.kategoriler.kategori.ekle')}}" type="button" class="btn btn-outline-success">Kategori Ekle</a>
                                    <button type="button" class="btn btn-outline-danger secilisil">Seçili Olanları Sil</button>

                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Kategori</th>
                                    <th>İcon</th>
                                    <th>#</th>
                                </tr>
                                </thead>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    //Modal Kategori Düzenle
    <div class="modal fade" data-backdrop="static" id="modalKategoriDuzenle" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Kategori Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                   <form id="modal_kategori_duzenle_form" action="" method="post">
                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="kategori_adi">Kategori Adı</label>
                               <input value="{{old('kategori_adi')}}" name="kategori_adi" type="text" class="form-control {{$errors->has('kategori_adi') ? 'is-invalid':''}}" id="kategori_adi" placeholder="Kategori adını yazınız">
                               @if($errors->has('kategori_adi'))
                                   <div class="invalid-feedback" style="display: block;">{{$errors->first('kategori_adi')}}</div>
                               @endif
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="kategori_icon">Kategori İcon</label>
                               <div class="input-group mb-4">
                                   <input id="kategori_icon" value="{{old('kategori_icon')}}" name="kategori_icon" type="text" class="form-control" placeholder="Kategori iconu" >
                                   <div class="input-group-append">
                                       <span class="input-group-text" id="basic-addon2"><object height="32" id="svg1" data="{{asset('assets/images/kategori_icon/diger.svg')}}" type="image/svg+xml"></object></span>
                                   </div>
                                   @if($errors->has('kategori_icon'))
                                       <div class="invalid-feedback" style="display: block;">{{$errors->first('kategori_icon')}}</div>
                                   @endif
                               </div>

                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <a data-toggle="modal" data-target="#modaliconSec" class="btn btn-success mb-4 mr-2">İcon Seç</a>
                           </div>

                       </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Kapat</button>

                </div>
            </div>
        </div>
    </div>

    //Modal İcon Seç
    <div class="modal fade" data-backdrop="static" id="modaliconSec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Kategori İconları</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        @foreach(\Illuminate\Support\Facades\File::glob(public_path().'/assets/images/kategori_icon/*.*') as $filename)

                            <img data-imgname="{{explode('/',$filename)[4]}}" style="cursor:pointer " title="{{explode('.',explode('/',$filename)[4])[0]}}"  height="32" class="mr-3 mb-3 imgicon" src="{{ str_replace(public_path(), '', $filename) }}">
                        @endforeach
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Kapat</button>

                </div>
            </div>
        </div>
    </div>
@endsection
