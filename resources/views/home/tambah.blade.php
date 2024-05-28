@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')
    <form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Nama <span>{{$errors->first('nama')}}</span></label>
            <input type="text" name="nama" class="p-2 border rounded-md" value="{{ old('nama')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Email</label>
            <input type="text" name="email" class="p-2 border rounded-md" value="{{ old('email')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Telepon</label>
            <input type="text" name="telepon" class="p-2 border rounded-md" value="{{ old('telepon')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Foto </label>
            <input type="file" name="foto" class="p-2 border rounded-md">
        </div>
        <div class="flex justify-end">
            <button class="bg-blue-500 w-1/2 p-2 rounded-md text-white" type="submit">Simpan</button>
        </div>
    </form>
@endsection