@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')
    <form action="{{route('savemapel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Mata Pelajaran</label>
            <input type="text" name="nmapel" class="p-2 border rounded-md" value="{{ old('nmapel')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Guru</label>
            <input type="text" name="guru" class="p-2 border rounded-md" value="{{ old('guru')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Jadwal</label>
            <input type="text" name="jadwal" class="p-2 border rounded-md" value="{{ old('jadwal')}}">
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Kelas</label>
            <input type="text" name="kelas" class="p-2 border rounded-md" value="{{ old('kelas')}}">
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