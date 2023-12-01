<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form pendaftaran</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class=" h-screen relative flex items-center w-full mx-auto">
        <img src="/bg.jpeg" class="absolute object-cover  h-full brightness-[2] contrast-[75%] top-0 w-full z-[-10]" alt="">
        <div class="absolute w-full h-full z-[-9] bg-white/60">

        </div>

        <div class="flex flex-col w-full items-center">
            <img src="/telkomedika-logo.png" alt="">

            <h1 class="my-5 text-xl font-bold">Form Pendaftaran</h1>

            <form>
                <div class="bg-white p-3 rounded-xl grid gap-4">
                    <div class="flex">
                        <label for="" class="font-bold w-[125px]">Tipe Pasien</label>
                        <div>
                            : <input type="radio" name="tipe-pasien" id=""> Umum
                            <input type="radio" name="tipe-pasien" id=""> Civitas
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="font-bold w-[125px]">NIM</label>
                        <div>
                            : <input class="border" type="text" name="nim" id="">
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="font-bold w-[125px]">No Whatsapp</label>
                        <div>
                            : <input class="border" type="text" name="nim" id="">
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <button class="bg-white shadow-xl text-black font-bold mx-auto block px-5 py-2 rounded-md">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
