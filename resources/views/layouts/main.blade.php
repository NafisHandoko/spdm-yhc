<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Data Mahasiswa</title>
    <link rel="stylesheet" href="/css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="w-full bg-blue-500">
        <div class="container mx-auto py-4 flex flex-row justify-between items-center">
            <h2 class="font-bold text-2xl text-white">Sistem Pengelolaan Data Mahasiswa</h2>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="bg-red-500 rounded-lg text-white px-4 py-2">Logout</button>
            </form>
        </div>
    </div>
    @yield('container')
</body>
</html>