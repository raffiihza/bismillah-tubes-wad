<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex justify-between fixed w-full z-[10] items-center px-10 py-4 bg-[#D9D9D9]">
        <div class="flex gap-4 items-center">
            <img src="/telkomedika-logo.png" alt="logo" class="w-[70px]">
            <div class="hidden md:block">
                <ul class="flex gap-2">
                    <li>
                        <a href="">Antrian</a>
                    </li>
                    <li>
                        <a href="">Informasi</a>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <a class="block px-5 py-2 bg-red-600 text-white rounded-md" href="">Login</a>
        </div>
    </nav>

    <main class="relative min-h-screen overflow-hidden pt-[10rem] pb-[5rem]">
        <img src="/bg.jpeg" alt="bg" class="absolute contrast-50 h-full top-0 w-full bg-cover">

        <div class="relative z-[9]">
            <div class="flex flex-col gap-5 items-center">
                <h1 class="text-5xl font-bold  text-white">13.13</h1>
                <h2 class="uppercase text-red-600 font-bold text-4xl">Selamat datang</h2>
                <h3 class="bg-red-600 inline-block px-7 text-sm font-bold py-3 rounded-full text-white uppercase">Di website Telkomedika</h3>
            </div>

            <div class="mt-[8rem] md:mt-8 max-w-2xl mx-auto flex flex-col md:flex-row gap-10 justify-between items-center">
                <div class="bg-white rounded-md w-full max-w-[300px]">
                    <img class="w-[150px] block mx-auto" src="/people.png" alt="people">
                    <div class="mt-2 border-t flex justify-center py-2 px-5 md:px-0 text-center">
                        <a href="{{ route('form-pendaftaran') }}" class="px-4 py-2 bg-red-600 block w-full md:w-auto md:inline-block font-bold text-white text-sm rounded-full ">Daftar Antri</a>
                    </div>
                </div>
                <div class="bg-white rounded-md w-full max-w-[300px]">
                    <img class="w-[100px] block mx-auto" src="/document.png" alt="document">
                    <div class="mt-2 border-t flex justify-center py-2 px-5 md:px-0 text-center">
                        <a href="{{ route('artikel') }}" class="px-4 py-2 bg-red-600 block w-full md:w-auto md:inline-block font-bold text-white text-sm rounded-full ">Informasi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 w-full h-[200px] bg-red-600 z-[8]">
        </div>
    </main>
</body>
</html>
