<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | TelkoMedika</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <section>
        <div class="mx-auto px-4 py-8 sm:py-12 sm:px-6 md:py-16 md:px-8 bg-error">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-16">
                <div class="mx-auto md:order-last">
                    <img alt="Party" src="/beranda-informasi.png" class="rounded-full" />
                </div>

                <div class="md:pl-20 text-center md:text-left text-white">
                    <p>
                        Healthcare Management Service partner
                    </p>

                    <div class="mt-4">
                        <h2 class="text-3xl font-bold sm:text-4xl">Telkomedika</h2>
                        <h2 class="text-3xl font-bold sm:text-4xl">better wellness everyday</h2>
                    </div>

                    <a href="#"
                        class="mt-8 inline-block rounded bg-white text-black px-12 py-3 text-sm font-medium transition hover:bg-black hover:text-white ">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto  px-4 py-4 md:px-8">
            <div class="flex flex-col w-full md:flex-row">
                <div class="flex-1">
                    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div>
                            <img alt="Party" src="/beranda-informasi-2.jpeg" class="h-full w-full object-cover" />
                            <div class="-translate-y-[50%] hidden md:-translate-y-1/2 w-10/12 m-auto md:block">
                                <div class="flex bg-error text-white py-4 px-4 m-auto rounded">
                                    <div class="text-center">
                                        <h1 class="text-xl font-bold mb-4">Rp 6Jt</h1>

                                        <p>Max Biaya Opname</p>
                                    </div>

                                    <div class="divider divider-horizontal"></div>

                                    <div class=" text-center">
                                        <h1 class="text-xl font-bold mb-4">99%</h1>

                                        <p>Positive Review</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>

                                <h2 class="mb-4 text-error">Layanan khusus civitas Telkom</h2>

                                <h2 class="text-3xl font-bold sm:text-4xl mb-4">Increase Shareholder Value By Business
                                    Sustainability</h2>

                                <article class="space-y-4 text-gray-600 mb-4">
                                    <p>
                                        Dengan dibawah naungan Telkomedika merupakan
                                        perusahaan penyedia layanan kesehatan yang
                                        memberikan layanan solusi kesehatan untuk
                                        masyarakat umum berupa Klinik dan Layanan
                                        Kesehatan
                                    </p>
                                </article>

                                <button class="bg-error text-white px-5 py-2 rounded ">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider md:divider-horizontal"></div>

                <div class="flex-1 grid md:grid-cols-2 gap-4">
                    <div class="card card-compact bg-base-100 shadow-xl">
                        <figure><img src="/beranda-informasi-5.jpeg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="text-error font-bold text-lg">Kesehatan Civitas Menjadi Prioritas Utama</h2>
                            <p>
                                Telkom group juga sangat peduli terhadap kesehatan para civitas mereka.
                                Oleh karena itu alasan mereka membangun Telkomedika adalah agar selalu memastikan
                                dan memperhatikan kesehatan para civitasnya.
                            </p>
                            <div class="card-actions mt-2">
                                <button class="bg-error text-white px-5 py-2 rounded"
                                    onclick="article_1.showModal()">Learn More</button>
                            </div>
                            <dialog id="article_1" class="modal">
                                <div class="modal-box">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold text-lg mb-4">Peningkatan Layanan dengan melakukan program
                                            partnership</h3>

                                        <div class="flex justify-end items-center">
                                            <i class="bi bi-arrow-clockwise text-lg mr-2"></i>
                                            <form method="dialog">
                                                <button class="delete-article">
                                                    <i class="bi bi-trash text-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <figure><img src="/beranda-informasi-5.jpeg" alt="Shoes" /></figure>
                                    <p class="py-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eaque odio nulla
                                        accusantium quaerat perspiciatis ullam. Explicabo sunt distinctio veniam saepe
                                        sed voluptatum, at expedita esse error earum. Quo, delectus! Lorem ipsum dolor
                                        sit amet consectetur, adipisicing elit. Quae tempore odio dolor et minus?
                                        Excepturi debitis exercitationem expedita voluptatem quisquam porro, fuga
                                        pariatur sed accusamus dignissimos cupiditate magni aspernatur consequuntur.
                                    </p>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    </div>
                    <div class="card card-compact bg-base-100 shadow-xl">
                        <figure><img src="/beranda-informasi-3.jpeg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="text-error font-bold text-lg">Poli Gigi Telah Hadir</h2>
                            <p>
                                Pihak Telkom dan juga klinik pratama THC telah membuka layanan kesehatan poli gigi di
                                sana. Ini memjadi bukti keseriusan Telkomedika untuk terus meningkatkan layananya.
                            </p>
                            <div class="card-actions mt-2">
                                <button class="bg-error text-white px-5 py-2 rounded"
                                    onclick="article_2.showModal()">Learn More</button>
                            </div>
                            <dialog id="article_2" class="modal">
                                <div class="modal-box">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold text-lg mb-4">Poli Gigi telah hadir</h3>

                                        <div class="flex justify-end items-center">
                                            <i class="bi bi-arrow-clockwise text-lg mr-2"></i>
                                            <form method="dialog">
                                                <button class="delete-article">
                                                    <i class="bi bi-trash text-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <figure><img src="/beranda-informasi-3.jpeg" alt="Shoes" /></figure>
                                    <p class="py-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eaque odio nulla
                                        accusantium quaerat perspiciatis ullam. Explicabo sunt distinctio veniam saepe
                                        sed voluptatum, at expedita esse error earum. Quo, delectus! Lorem ipsum dolor
                                        sit amet consectetur, adipisicing elit. Quae tempore odio dolor et minus?
                                        Excepturi debitis exercitationem expedita voluptatem quisquam porro, fuga
                                        pariatur sed accusamus dignissimos cupiditate magni aspernatur consequuntur.
                                    </p>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    </div>
                    <div class="card card-compact bg-base-100 shadow-xl">
                        <figure><img src="/beranda-informasi-4.jpeg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="text-error font-bold text-lg">Partnership untuk Meningkatkan Layanan</h2>
                            <p>
                                Salah satu cara untuk meningkatkan layanan kesehatan disemua lini Telkomedika adalah
                                dengan melakukan program kerja sama atau partnership bersama pihak yang terpercaya
                            </p>
                            <div class="card-actions mt-2">
                                <button class="bg-error text-white px-5 py-2 rounded"
                                    onclick="article_3.showModal()">Learn More</button>
                            </div>
                            <dialog id="article_3" class="modal">
                                <div class="modal-box">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold text-lg mb-4">Partnership untuk meningkatkan layanan</h3>

                                        <div class="flex justify-end items-center">
                                            <i class="bi bi-arrow-clockwise text-lg mr-2"></i>
                                            <form method="dialog">
                                                <button class="delete-article">
                                                    <i class="bi bi-trash text-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <figure><img src="/beranda-informasi-4.jpeg" alt="Shoes" /></figure>
                                    <p class="py-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eaque odio nulla
                                        accusantium quaerat perspiciatis ullam. Explicabo sunt distinctio veniam saepe
                                        sed voluptatum, at expedita esse error earum. Quo, delectus! Lorem ipsum dolor
                                        sit amet consectetur, adipisicing elit. Quae tempore odio dolor et minus?
                                        Excepturi debitis exercitationem expedita voluptatem quisquam porro, fuga
                                        pariatur sed accusamus dignissimos cupiditate magni aspernatur consequuntur.
                                    </p>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    </div>
                    <div class="card card-compact bg-base-100 shadow-xl">
                        <figure><img src="/beranda-informasi-6.jpeg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="text-error font-bold text-lg">Partnership untuk Meningkatkan Layanan</h2>
                            <p>
                                Salah satu cara untuk meningkatkan layanan kesehatan disemua lini Telkomedika adalah
                                dengan melakukan program kerja sama atau partnership bersama pihak yang terpercaya
                            </p>
                            <div class="card-actions mt-2">
                                <button class="bg-error text-white px-5 py-2 rounded"
                                    onclick="article_4.showModal()">Learn More</button>
                            </div>
                            <dialog id="article_4" class="modal">
                                <div class="modal-box">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold text-lg mb-4">Partnership untuk meningkatkan layanan</h3>

                                        <div class="flex justify-end items-center">
                                            <i class="bi bi-arrow-clockwise text-lg mr-2"></i>
                                            <form method="dialog">
                                                <button class="delete-article">
                                                    <i class="bi bi-trash text-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <figure><img src="/beranda-informasi-6.jpeg" alt="Shoes" /></figure>
                                    <p class="py-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eaque odio nulla
                                        accusantium quaerat perspiciatis ullam. Explicabo sunt distinctio veniam saepe
                                        sed voluptatum, at expedita esse error earum. Quo, delectus! Lorem ipsum dolor
                                        sit amet consectetur, adipisicing elit. Quae tempore odio dolor et minus?
                                        Excepturi debitis exercitationem expedita voluptatem quisquam porro, fuga
                                        pariatur sed accusamus dignissimos cupiditate magni aspernatur consequuntur.
                                    </p>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-error h-24 text-white">

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteModal(articleId) {
            articleId.close();
        }
    </script>
</body>

</html>
