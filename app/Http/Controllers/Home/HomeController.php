<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Penggunas;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home()
    {
        $data['user'] = Penggunas::get();
        return view('home/home', $data);
    }

    public function tambah()
    {
        return view('home/tambah');
    }

    

    public function save(UserRequest $r)
    {
        if ($r->validated()) {

            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/', $foto);

            Penggunas::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telepon' => $r->telepon,
                'foto' => $foto

            ]);
            return redirect('home')->with('pesan', 'input data berhasiil');
        }
    }

    public function edit($id)
    {
        $data['penggunas'] = Penggunas::where('id', $id)->first();
        return view('home/edit', $data);
    }

    public function update(UpdateRequest $r, $id)
    {
        if ($r->validated()) {
            if ($r->foto) {

                $cek = Penggunas::where('id',$id)->first();

                if (File::exists(public_path('foto/'.$cek->foto))) {
                    File::delete(public_path('foto/'.$cek->foto));
                }

                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/', $foto);

                $data['foto']=$foto;
            }
            $data['nama']=$r->nama;
            $data['email']=$r->email;
            $data['telepon']=$r->telepon;

            Penggunas::where('id',$id)->update($data);
            return redirect('home');
        }
    }

    public function hapus($id){
        Penggunas::where('id',$id)->delete();
        return back();
    }
}
