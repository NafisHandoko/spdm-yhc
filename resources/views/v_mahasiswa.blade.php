@extends('layouts.main')

@section('container')
    <div class="container mx-auto">
        <h1 class="font-bold text-2xl my-5">Data Mahasiswa</h1>
        <div class="flex flex-col gap-5">
            <div>
                <p class="font-light text-sm text-gray-500">Nama</p>
                <p>{{ $mahasiswa->nama }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Prodi</p>
                <p>{{ $mahasiswa->prodi }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Semester</p>
                <p>{{ $mahasiswa->semester }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Kelas</p>
                <p>{{ $mahasiswa->kelas }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Tahun Angkatan</p>
                <p>{{ $mahasiswa->tahun }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Perguruan Tinggi</p>
                <p>{{ $mahasiswa->kampus }}</p>
            </div>
            <div>
                <p class="font-light text-sm text-gray-500">Domisili</p>
                <p>{{ $mahasiswa->domisili }}</p>
            </div>
        </div>
        <div class="flex flex-row gap-2 my-7">
            <a href="/" class="rounded-lg border border-blue-500 px-4 py-2">Kembali</a>
            <a href="/mahasiswa/{{ $mahasiswa->id }}/edit-view" class="text-white rounded-lg bg-blue-500 px-4 py-2">Ubah</a>
            <a href="/mahasiswa/{{ $mahasiswa->id }}/delete" class="text-white rounded-lg bg-red-500 px-4 py-2">Hapus</a>
        </div>
    </div>

    @if(session()->has('editSuccess'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('editSuccess') }}")
            });
        </script>
    @endif
    @if(session()->has('editFailed'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('editFailed') }}")
            });
        </script>
    @endif
@endsection