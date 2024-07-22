<?php

namespace App\Http\Controllers\Kota;

use App\Http\Controllers\Controller;
use App\Http\Requests\TambahKota;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;


class KotaController extends Controller
{
    public function index(){
        // penggunaan select untuk memilih data yang ingin ditampilkan, tanpa mengambil seluruh data
        $data['kota']= Kota::leftJoin('provinsi', 'provinsi.id','kota.id_provinsi')->select('kota.id','provinsi.nama_provinsi','kota.nama_kota')->get();
        // $data['kota']= DB::table('kota')->leftJoin('provinsi', 'provinsi.id','kota.id_provinsi')->get(); cara lainnya
        return view('kota/home',$data);
    }
    public function tambah(){
        $data['provinsi']=Provinsi::get();
        return view('kota/tambah',$data);   
    }
    public function save(TambahKota $r){
        if ($r->validated()) {
            Kota::create([
                'id_provinsi' => $r->id_provinsi,
                'nama_kota' => $r->nama_kota
            ]);
            return redirect('kota')->with('pesan', 'Input Berhasil');
        }
        return back();
    }
}
