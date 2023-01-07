<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="/css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <form id="tambah-mahasiswa-form" class="container mx-auto"  action="/mahasiswa/add-post" method="post">
        @csrf
        <h1 class="font-bold text-2xl my-5">Tambah Mahasiswa</h1>
        <div class="flex flex-col gap-5">
            <div class="space-y-2">
                <label html-for="">Nama</label>
                <div class="relative w-full">
                    <input type="text" id="nama" name="nama" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="John Doe" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Prodi</label>
                <div class="relative w-full">
                    <input type="text" id="prodi" name="prodi" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Teknik Kelautan" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Semester</label>
                <div class="relative w-full">
                    <input type="text" id="semester" name="semester" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="5" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Kelas</label>
                <div class="relative w-full">
                    <input type="text" id="kelas" name="kelas" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="A" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Tahun Angkatan</label>
                <div class="relative w-full">
                    <input type="text" id="tahun" name="tahun" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="2022" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Perguruan Tinggi</label>
                <div class="relative w-full">
                    <input type="text" id="kampus" name="kampus" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Universitas ABC" />
                </div>
            </div>
            <div class="space-y-2">
                <label html-for="">Domisili</label>
                <div class="relative w-full">
                    <input type="text" id="domisili" name="domisili" class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Kediri, Jawa Timur" />
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

    <!-- <script>
        $('#tambah-mahasiswa-form').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "/mahasiswa/add-post",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#success-modal').show();
                    console.log(data)
                },
                error: function (data) {
                    $('#failed-modal').show();
                    console.log(data)
                    // console.log(data.responseJSON.errors);
                    // let errorMsg = '';
                    // $.each(data.responseJSON.errors, function (key, error) {
                    //     errorMsg += error + '\n';
                    // })
                    // alert(errorMsg);
                }
            })
        })
    </script> -->
</body>
</html>