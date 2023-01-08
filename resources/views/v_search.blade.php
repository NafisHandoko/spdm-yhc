@extends('layouts.main')

@section('container')
    <div class="container mx-auto flex flex-col">
        <h1 class="text-2xl font-bold my-8">Hasil Pencarian : "{{ $search }}"</h1>
        <div class="flex flex-row gap-2 items-stretch">
            <a href="/" class="rounded-lg border border-blue-500 px-4 py-2 self-start mb-3">Kembali</a>
            <div class="flex justify-center">
                <div class="xl:w-96">
                    <select 
                    id="sort-input"
                    class="form-select appearance-none
                    block
                    w-28
                    px-3
                    py-2
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded-lg
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-500 focus:outline-none" aria-label="Default select example">
                        <option selected>Sort By</option>
                        <option value="prodi">Prodi</option>
                        <option value="semester">Semester</option>
                        <option value="kelas">Kelas</option>
                        <option value="tahun">Tahun Angkatan</option>
                    </select>
                </div>
            </div>
        </div>
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
                            <tbody id="search-result">
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#sort-input').change(function () {
            $.ajax({
                url: "/sort-search",
                type: 'POST',
                data: {
                    search: "{{ $search }}",
                    sortby: $('#sort-input option:selected').val()
                },
                success: function (data) {
                    $('#search-result').html(data);
                    // $('#edit-modal-overlay').hide();
                    console.log(data)
                },
                error: function (data) {
                    // $('.container').html(data);
                    $('#edit-modal-overlay').hide();
                    console.log(data.responseJSON.errors);
                    let errorMsg = '';
                    $.each(data.responseJSON.errors, function (key, error) {
                        errorMsg += error + '\n';
                    })
                    alert(errorMsg);
                }
            })
        })
    </script>
@endsection