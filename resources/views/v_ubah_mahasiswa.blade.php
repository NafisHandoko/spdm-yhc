@extends('layouts.main')

@section('container')
    <form id="tambah-mahasiswa-form" class="container mx-auto"  action="/mahasiswa/{{ $mahasiswa->id }}/edit-post" method="post">
        @csrf
        <h1 class="font-bold text-2xl my-5">Ubah Data Mahasiswa</h1>
        <div class="flex flex-col gap-5">
            <div class="space-y-2">
                <label html-for="">Nama</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->nama }}" type="text" id="nama" name="nama" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="John Doe" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Prodi</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->prodi }}" type="text" id="prodi" name="prodi" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Teknik Kelautan" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Semester</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->semester }}" type="text" id="semester" name="semester" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="5" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Kelas</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->kelas }}" type="text" id="kelas" name="kelas" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="A" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Tahun Angkatan</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->tahun }}" type="text" id="tahun" name="tahun" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="2022" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Perguruan Tinggi</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->kampus }}" type="text" id="kampus" name="kampus" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Universitas ABC" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Domisili</label>
                <div class="relative w-full">
                    <input value="{{ $mahasiswa->domisili }}" type="text" id="domisili" name="domisili" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Kediri, Jawa Timur" />
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-2 my-7">
            <a href="/" class="rounded-lg border border-blue-500 px-4 py-2">Batal</a>
            <input type="submit" value="Submit" class="text-white rounded-lg bg-blue-500 px-4 py-2">
        </div>
    </form>

    <div id="success-modal" class="fixed top-0 left-0 w-screen h-screen bg-black/50 flex items-center justify-center hidden">
        <div class="rounded-lg bg-white flex flex-col items-center gap-5 p-7">
            <h3 class="font-bold text-xl">Operation Successful!</h3>
            <i class="bi bi-check-circle-fill text-green-500 text-6xl"></i>
            <a href="/" class="rounded-lg bg-blue-500 px-4 py-2 text-white">OK</a>
        </div>
    </div>
    <div id="failed-modal" class="fixed top-0 left-0 w-screen h-screen bg-black/50 flex items-center justify-center hidden">
        <div class="rounded-lg bg-white flex flex-col items-center gap-5 p-7">
            <h3 class="font-bold text-xl">Operation Failed!</h3>
            <i class="bi bi-x-circle-fill text-red-500 text-6xl"></i>
            <a href="/" class="rounded-lg bg-blue-500 px-4 py-2 text-white">OK</a>
        </div>
    </div>
@endsection