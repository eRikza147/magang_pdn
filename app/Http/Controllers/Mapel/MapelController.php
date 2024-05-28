<?php

namespace App\Http\Controllers\Mapel;

use App\Http\Controllers\Controller;
use App\Http\Requests\TambahMapel;
use App\Http\Requests\UpdateMapel;
use App\Models\mapel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function mapel()
    {
        $data['mapel']=mapel::get();
        return view('mapel/mapel',$data);
    }

    public function tambah(){
        return view('mapel/tambah');
    }

    public function save(TambahMapel $r){
        if ($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/', $foto);

            mapel::create([
                'nmapel' => $r->nmapel,
                'guru' => $r->guru,
                'jadwal' => $r->jadwal,
                'kelas' => $r->kelas,
                'foto' => $foto

            ]);
            return redirect('mapel')->with('pesan', 'input data berhasiil');
        }
    }

    public function edit($id)
    {
        $data['mapel'] = mapel::where('id',$id)->first();
        return view('mapel/edit',$data); 
    }

    public function update(UpdateMapel $r, $id){
        if ($r->validated()) {
            if ($r->foto) {
                $cek = mapel::where('id',$id)->first();
                if (File::exists(public_path('foto/'.$cek->foto))) {
                    File::delete(public_path('foto/'.$cek->foto));
                }
                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/', $foto);

                $data['foto']=$foto;
            }
            $data['nmapel']=$r->nmapel;
            $data['guru']=$r->guru;
            $data['jadwal']=$r->jadwal;
            $data['kelas']=$r->kelas;
        
            mapel::where('id',$id)->update($data);
            return redirect('mapel');
        }
    }
}
