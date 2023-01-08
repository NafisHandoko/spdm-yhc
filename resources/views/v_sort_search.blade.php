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