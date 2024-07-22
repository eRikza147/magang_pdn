@extends('home.template')

@section('title')
    Hamalan Kota
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-x font-bold">Data User</div>
        <div>
            <a href="{{ route('tambahkota') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3">
                <th class="border p-3">No.</th>
                <th class="border p-3">Nama Provinsi</th>
                <th class="border p-3">Nama Kota</th>
                <th class="border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kota as $i =>$a)
            <tr>
                <td class="border p-3 text-center">{{($i+1)}}</td>
                <td class="border p-3 text-center">{{($a->nama_provinsi)}}</td>
                <td class="border p-3 text-center">{{($a->nama_kota)}}</td>
                <td class="border p-3 text-center">
                    <div class="flex gap-3 justify-center">
                    <a href="#" class="item-center bg-blue-500 hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="#" class="bg-red-500 hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection