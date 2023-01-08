@extends('layouts.main')

@section('container')
    <div class="container mx-auto flex flex-col">
        <h1 class="text-2xl font-bold my-8">Hasil Pencarian</h1>
        <a href="/" class="rounded-lg border border-blue-500 px-4 py-2 self-start mb-3">Kembali</a>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        id
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nama
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Prodi
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Semester
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Kelas
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tahun
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $mahasiswa)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $mahasiswa->id }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $mahasiswa->nama }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $mahasiswa->prodi }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $mahasiswa->semester }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $mahasiswa->kelas }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $mahasiswa->tahun }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-row items-center gap-2">
                                                <a href="/mahasiswa/{{ $mahasiswa->id }}" class="bg-blue-500 text-white rounded-lg w-10 aspect-square flex items-center justify-center"><i class="bi bi-pen-fill"></i></a>
                                                <!-- <a href="/mahasiswa/1/delete" class="bg-red-500 text-white rounded-lg w-10 aspect-square flex items-center justify-center"><i class="bi bi-trash-fill"></i></a> -->
                                                <button onclick="if(confirm('Yakin ingin menghapus data ini?')){window.location = '/mahasiswa/{{ $mahasiswa->id }}/delete';}" class="bg-red-500 text-white rounded-lg w-10 aspect-square flex items-center justify-center"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection