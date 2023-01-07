<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SPDM</title>
    <link rel="stylesheet" href="/css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <a href="/mahasiswa/add-view" class="w-14 aspect-square flex items-center justify-center text-white bg-blue-400 shadow-lg hover:bg-blue-500 hover:shadow-blue-500 rounded-full fixed bottom-10 right-10 z-50 transition-all"><i class="bi bi-plus text-3xl font-bold"></i></a>
    <div class="container mx-auto flex flex-col">
        <h1 class="text-center text-3xl font-bold my-8">Sistem Pengelolaan Data Mahasiswa</h1>
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
                                                <a href="/mahasiswa/1/delete" class="bg-red-500 text-white rounded-lg w-10 aspect-square flex items-center justify-center"><i class="bi bi-trash-fill"></i></a>
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

    @if(session()->has('addSuccess'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('addSuccess') }}")
            });
        </script>
    @endif
    @if(session()->has('addFailed'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('addFailed') }}")
            });
        </script>
    @endif

    @if(session()->has('deleteSuccess'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('deleteSuccess') }}")
            });
        </script>
    @endif
    @if(session()->has('deleteFailed'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('deleteFailed') }}")
            });
        </script>
    @endif
</body>
</html>