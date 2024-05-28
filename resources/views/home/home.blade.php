@extends('home.template')

@section('title')
    home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-x font-bold">Data User</div>
        <div>
            <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3">
                <th class="border p-3">No.</th>
                <th class="border p-3">Nama</th>
                <th class="border p-3">Email</th>
                <th class="border p-3">Telpom</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $i =>$a)
            <tr>
                <td class="border p-3 text-center">{{($i+1)}}</td>
                <td class="border p-3 text-center">{{($a->nama)}}</td>
                <td class="border p-3 text-center">{{($a->email)}}</td>
                <td class="border p-3 text-center">{{($a->telepon)}}</td>
                <td class="border p-3 "><img class="max-w-32" src="{{asset('foto/'.$a->foto)}}" alt=""></td>
                <td class="border p-3 text-center">
                    <div class="flex gap-3 justify-center">
                    <a href="{{ route('edit',$a->id) }}" class="item-center bg-blue-500 hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="{{ route('hapus',$a->id) }}" class="bg-red-500 hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection