<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPDM</title>
    <link rel="stylesheet" href="/css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-cover bg-center relative" style="background-image: url(https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
        <div class="bg-black/50 h-screen">
            <div class="container mx-auto flex flex-col h-full items-center justify-center px-5 md:px-0">
                <h1 class="text-white text-3xl font-bold mb-14">Sistem Pengelolaan Data Mahasiswa - YHC</h1>
                <form action="/login" method="post" class="flex flex-col items-stretch text-white gap-y-4 max-w-full rounded-lg backdrop-blur-sm bg-[#D9D9D9]/30 p-10">
                    @csrf
                    <h1 class="text-center font-bold text-3xl">LOGIN</h1>
                    <div class="text-center">
                        <p>Username : admin</p>
                        <p>Password : admin123</p>
                    </div>
                    <!-- {error && <span class="text-sm text-center text-red-500 py-2 px-3 bg-red-200/75 border border-red-500 rounded-lg self-center">{error}</span>} -->
                    <input id="username" name="username" class="text-black rounded-lg bg-gray-200 placeholder-gray-500 py-3 px-4 focus:ring-blue-500 focus:border-blue-500" type="text" placeholder="Username" required/>
                    <input id="password" name="password" class="text-black rounded-lg bg-gray-200 placeholder-gray-500 py-3 px-4 focus:ring-blue-500 focus:border-blue-500" type="password" placeholder="Password" required/>
                    <!-- <Link to="/forgot-password" href="#" class="self-end text-sm text-blue-500">forgot password</Link> -->
                    <button type="submit" class="bg-blue-500 text-hade-blue rounded-lg py-3 transition-all shadow-md hover:shadow-blue-500 disabled:bg-gray-300 disabled:hover:shadow-none">Login</button>
                    <!-- <span class="text-sm text-center">Don't have an account? <Link to="/register" class="text-blue-500">Sign up here!</Link></span> -->
                </form>
            </div>
        </div>
    </div>

    @if(session()->has('loginError'))
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                alert("{{ session('loginError') }}")
            });
        </script>
    @endif
</body>
</html>