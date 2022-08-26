<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Kategoriler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){
        return view('admin.pages.kategoriler.kategoriler');
    }

    public function IndexKategoriEkle(){
        return view('admin.pages.kategoriler.kategori-ekle');
    }

    public function kategoriKaydet(Request $request){

        $validated = $request->validate([
            'kategori_adi'=>'required|unique:kategoriler',
            'kategori_icon'=>'required'
        ],[
            'kategori_adi.required'=>'Kategori adını yazmadınız',
            'kategori_adi.unique'=>'Kategori adı daha kayıt yapılmış',
            'kategori_icon.required'=>'Kategori iconu seçmediniz'
        ]);
        if(Kategoriler::create($request->all())){
            return Redirect::back()->with('success','Kategori başarıyla eklendi');
        }
        else{
            return Redirect::back()->with('error','Sistem hatası. Kategori eklenemedi');
        }

    }

    public function getTable(Request $request){
        $data = Kategoriler::select('*');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('checkbox',function ($row){
                return '<input type="checkbox" id="'.$row->id.'" name="someCheckbox" />';
            })
            ->rawColumns(['checkbox'])
            ->addColumn('action',function ($row){
                return '
                   <a title="Düzenle" data-id="'.$row->id.'" data-kategori_adi="'.$row->kategori_adi.'"  data-kategori_icon="'.$row->kategori_icon.'"  href="#" data-toggle="modal" data-target="#modalKategoriDuzenle"  class="btn btn-sm btn-outline-info waves-effect waves-light"><i class="fa fa-edit"></i> </a>
                   <a title="Sil" data-id="" href="#" onclick="singleSil('.$row->id.')" class="sil btn btn-sm btn-outline-info waves-effect waves-light"><i class="fa fa-trash"></i> </a>
                   ';
            })
            ->rawColumns(['action'])
            ->make(true);

    }
    public function secililerSil(Request $request){
        foreach ($request->data as $id){
            Kategoriler::find($id)->delete();
        }

        return response()->json(['result'=>'ok','mesaj'=> 'Seçili kategoriler başarıyla silindi']);

    }
    public function SingleSil(Request $request){
        if(Kategoriler::find($request->id)->delete()){

            return response()->json(['result'=>'ok','mesaj'=> 'Kategori başarıyla silindi']);
        }
    }


    public function kategoriDuzenle(Request $request){

        $validator = Validator::make($request->all(),[

            'kategori_adi'=>'required|unique:kategoriler,kategori_adi,'.$request->id,
            'kategori_icon' =>'required'

        ],[
            'kategori_adi.required'=>'Kategori adını yazmadınız',
            'kategori_adi.unique' =>'Kategori daha önce kayıt yapılmış',
            'kategori_icon.required'=>'Icon yazmadınız',

        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()]);
        }


        if(Kategoriler::where('id',$request->id)->update($request->all())){
            return response()->json(['success'=>'Kategori başarıyla güncellendi']);
        }
    }
}
