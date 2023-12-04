<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <section class="bg-red-600 px-10 md:px-20 py-20">
    <div class="flex flex-col-reverse md:flex-row gap-2 justify-between max-w-screen-lg mx-auto">
      <div class="flex flex-col justify-center">
        <p class="text-white">Healthcare Management Service Partner</p>
        <h1 class="text-white text-4xl font-bold mt-5">Telkomedika <br>
          better wellness everyday
        </h1>
      </div>
      <div>
        <img class="w-[300px]" src="/logo-2.png" alt="logo">
      </div>
    </div>
  </section>


  <section class="px-5 flex flex-col md:flex-row mt-4 gap-10">
    <div class="relative w-full md:w-1/2">
      <img class="w-full" src="/bg-landing.png" alt="bg landing">

      <div class="flex p-4 relative gap-10 z-10 bg-red-600 w-full md:w-[400px]  justify-center md:ml-8 md:top-[-150px]">
        <div class="py-20 border-r border-white pr-7 text-center">
          <p class="text-white font-bold">Rp 6 JT</p>
          <p class="text-white">Max Biaya Opname</p>
        </div>
        <div class="py-20 text-center">
          <p class="text-white font-bold">99%</p>
          <p class="text-white">Positive Review</p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 flex flex-col gap-5 md:mt-[10rem] ">
      <p>Layanan khusus civitas Telkom</p>
      <h2 class="text-3xl font-bold">Increase Shareholder
        Value By Business Sustainability</h2>

      <div>
        <p>Dengan dibawah naungan TelkoMedika merupakan perusahaan penyedia layanan kesehatan yang memberikan layanan solusi kesehatan untuk masyarakat umum berupa Klinik dan Layanan Kesehatan.</p>
      </div>

      <a href="" class="bg-red-600 text-white inline-block w-[100px] text-center rounded-md">Get started</a>
    </div>
  </section>

  <section class="mb-10 mt-10 px-3">
    <h3 class="text-center mb-5 font-semibold text-xl text-red-700">Berita Terbaru</h3>

    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-5">
      <div class="shadow-xl">
        <img src="/berita-1.jpeg" class="w-full h-[220px] bg-cover" alt="berita-1">

        <div class="px-5 py-3">
          <h2 class="text-red-600 text-xl mb-4">Kesehatan Civitas menjadi prioritas utama</h2>
          <p>Telkom Group juga sangat peduli terhadap ksehatan para civitas mereka. Oleh karena itu alasan mereka membangun Telkomedika adalah agar selalu memastikan dan memperhatikan kesehatan para civitasnya.</p>

          <a href="{{ route('artikel') }}" class="bg-red-600 px-3 rounded-xl text-white mt-5 text-lg inline-block">Learn More</a>
        </div>

      </div>

      <div class="shadow-xl">
        <img src="/berita-2.jpeg" class="w-full h-[220px] bg-cover" alt="berita-2 ">

        <div class="px-5 py-3">
          <h2 class="text-red-600 text-xl mb-4">Poli Gigi Telah Hadir</h2>
          <p>
            Pihak Telkom dan juga Klinik pratama THC  telah membuka layanan kesehatan poli gigi disana. Ini menjadi bukti keseriusan Telkomedika untuk terus meningkatkan layananya.
          </p>

          <a href="{{ route('artikel') }}" class="bg-red-600 px-3 rounded-xl text-white mt-5 text-lg inline-block">Learn More</a>

        </div>
      </div>

      <div class="shadow-xl">
        <img src="/berita-3.jpeg" class="w-full h-[220px] bg-cover" alt="berita-3">

        <div class="px-5 py-3">
          <h2 class="text-red-600 text-xl mb-4">
            Pertnership untuk Meningkatkan Layanan.
          </h2>
          <p>
            Salah satu cara untuk meningkatkan layanan kesehatan disemua lini Telkomedika adalah dengan melakukan program kerja sama atau partnership bersama pihak yang terpercaya.
          </p>

          <a href="{{ route('artikel') }}" class="bg-red-600 px-3 rounded-xl text-white mt-5 text-lg inline-block">Learn More</a>

        </div>
      </div>
    </div>

  </section>
</body>
</html>
