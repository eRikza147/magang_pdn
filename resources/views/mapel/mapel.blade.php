@extends('home.template')

@section('title')
    Halaman Mapel
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-x font-bold">Data Mata Pelajaran</div>
        <div>
            <a href="{{route('tambahmapel')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3">
                <th class="border p-3">No.</th>
                <th class="border p-3">Nama Mapel</th>
                <th class="border p-3">Guru</th>
                <th class="border p-3">Jadwal</th>
                <th class="border p-3">Kelas</th>
                <th class="border p-3">Foto Guru</th>
                <th class="border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mapel as $i =>$a)
            <tr>
                <td class="border p-3 text-center">{{($i+1)}}</td>
                <td class="border p-3 text-center">{{($a->nmapel)}}</td>
                <td class="border p-3 text-center">{{($a->guru)}}</td>
                <td class="border p-3 text-center">{{($a->jadwal)}}</td>
                <td class="border p-3 text-center">{{($a->kelas)}}</td>
                <td class="border p-3 "><img class="max-w-32" src="{{asset('foto/'.$a->foto)}}" alt=""></td>
                <td class="border p-3">
                    <div class="flex gap-3 justify-center">
                    <a href="{{ route('editmapel',$a->id) }}" class="flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="{{ route('hapus',$a->id) }}" class="flex items-center justify-center bg-red-500 hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection