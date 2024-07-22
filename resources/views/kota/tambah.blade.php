@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')
    <form action="{{route('savekota')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Nama Provinsi</label>
            <select name="id_provinsi"  class="p-2 border rounded-md" >
                <option value="">----Pilih----</option>

                @foreach ($provinsi as $i => $a)
                    <option value="{{ $a -> id }}">{{ $a->nama_provinsi }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Nama Kota</label>
            <input type="text" name="nama_kota" class="p-2 border rounded-md" value="{{ old('nama_kota')}}">
        </div>
        <div class="flex justify-end">
            <button class="bg-blue-500 w-1/2 p-2 rounded-md text-white" type="submit">Simpan</button>
        </div>
    </form>
@endsection

{{-- <span>{{$errors->first('nama')}}</span> --}}