<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <nav class="flex justify-between p-5">
        <div>
            <a href="{{ route('landing-page') }}">
                <svg width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_141_307)">
                        <path d="M8.53125 12.1875H32.9062C33.2295 12.1875 33.5395 12.2731 33.768 12.4255C33.9966 12.5778 34.125 12.7845 34.125 13C34.125 13.2155 33.9966 13.4222 33.768 13.5745C33.5395 13.7269 33.2295 13.8125 32.9062 13.8125H8.53125C8.20802 13.8125 7.89802 13.7269 7.66946 13.5745C7.4409 13.4222 7.3125 13.2155 7.3125 13C7.3125 12.7845 7.4409 12.5778 7.66946 12.4255C7.89802 12.2731 8.20802 12.1875 8.53125 12.1875Z" fill="black"/>
                        <path d="M9.03604 13L19.1444 19.7373C19.3732 19.8899 19.5018 20.0968 19.5018 20.3126C19.5018 20.5283 19.3732 20.7352 19.1444 20.8878C18.9155 21.0404 18.6051 21.1261 18.2815 21.1261C17.9578 21.1261 17.6475 21.0404 17.4186 20.8878L6.44985 13.5753C6.33635 13.4998 6.2463 13.4102 6.18486 13.3115C6.12342 13.2127 6.0918 13.1069 6.0918 13C6.0918 12.8932 6.12342 12.7874 6.18486 12.6886C6.2463 12.5899 6.33635 12.5003 6.44985 12.4248L17.4186 5.1123C17.6475 4.95973 17.9578 4.87402 18.2815 4.87402C18.6051 4.87402 18.9155 4.95973 19.1444 5.1123C19.3732 5.26487 19.5018 5.47179 19.5018 5.68755C19.5018 5.90331 19.3732 6.11023 19.1444 6.2628L9.03604 13Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_141_307">
                            <rect width="39" height="26" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div>
            <ul class="flex gap-5 items-center">
                <li>
                    <a href="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7623 15.025 18.637C15.0417 18.5117 15.0667 18.3993 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.646 7.1 14.788C6.75 14.93 6.38333 15.0007 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.071 7.1 9.213C7.45 9.355 7.76667 9.55067 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.48767 15.025 5.363C15.0083 5.23833 15 5.11733 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92933 16.9 7.788C16.55 7.64667 16.2333 7.45067 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5127 8.975 11.638C8.99167 11.7633 9 11.884 9 12C9 12.1167 8.99167 12.2377 8.975 12.363C8.95833 12.4883 8.93333 12.6007 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3543 16.9 16.213C17.25 16.0717 17.6167 16.0007 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.521 5.904 18.713 5.712C18.905 5.52 19.0007 5.28267 19 5C19 4.71667 18.904 4.479 18.712 4.287C18.52 4.095 18.2827 3.99933 18 4C17.7167 4 17.479 4.096 17.287 4.288C17.095 4.48 16.9993 4.71733 17 5C17 5.28333 17.096 5.521 17.288 5.713C17.48 5.905 17.7173 6.00067 18 6ZM6 13C6.28333 13 6.521 12.904 6.713 12.712C6.905 12.52 7.00067 12.2827 7 12C7 11.7167 6.904 11.479 6.712 11.287C6.52 11.095 6.28267 10.9993 6 11C5.71667 11 5.479 11.096 5.287 11.288C5.095 11.48 4.99933 11.7173 5 12C5 12.2833 5.096 12.521 5.288 12.713C5.48 12.905 5.71733 13.0007 6 13ZM18 20C18.2833 20 18.521 19.904 18.713 19.712C18.905 19.52 19.0007 19.2827 19 19C19 18.7167 18.904 18.479 18.712 18.287C18.52 18.095 18.2827 17.9993 18 18C17.7167 18 17.479 18.096 17.287 18.288C17.095 18.48 16.9993 18.7173 17 19C17 19.2833 17.096 19.521 17.288 19.713C17.48 19.905 17.7173 20.0007 18 20Z" fill="black"/>
                        </svg>
                    </a>

                </li>
                <li>
                    <a href="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 21V5C5 4.45 5.196 3.979 5.588 3.587C5.98 3.195 6.45067 2.99934 7 3H17C17.55 3 18.021 3.196 18.413 3.588C18.805 3.98 19.0007 4.45067 19 5V21L12 18L5 21ZM7 17.95L12 15.8L17 17.95V5H7V17.95Z" fill="black"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <svg width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7C1.55228 7 2 6.55228 2 6C2 5.44772 1.55228 5 1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7Z" fill="black"/>
                            <path d="M1 2C1.55228 2 2 1.55228 2 1C2 0.447715 1.55228 0 1 0C0.447715 0 0 0.447715 0 1C0 1.55228 0.447715 2 1 2Z" fill="black"/>
                            <path d="M1 12C1.55228 12 2 11.5523 2 11C2 10.4477 1.55228 10 1 10C0.447715 10 0 10.4477 0 11C0 11.5523 0.447715 12 1 12Z" fill="black"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <button class="bg-red-600 ml-5 p-1 rounded-xl">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5C22 12.27 18.6 15.36 13.45 20.03L12 21.35Z" fill="white"/>
            </svg>
        </button>

        <div class=" max-w-screen-xl mx-auto mt-5">
            <img class="md:max-w-md rounded-xl mx-auto" src="/berita-1.jpeg" alt="">

            <div class="px-5 flex flex-col gap-5 mt-5">
                <p>
                    TelkoMedika didirikan pada tanggal 7 November 2008 dengan nama perusahaan PT Sarana Usaha Sejahtera Insanpalapa sebagai subsidiary Telkom Group dengan kepemilikan saham PT AdMedika 75% dan Yayasan Kesehatan Telkom 25%.
                </p>
                <p>
                    Saat ini layanan TelkoMedika dapat ditemui di kota-kota besar seperti Padang, Medan, Palembang, Lampung, Jakarta, Bogor, Depok, Tangerang Selatan, Bandung, Semarang, Yogyakarta, Surabaya, Malang, Madiun, Denpasar, Makassar, Balikpapan, dan Banjarmasin serta di kota lainnya yang dapat dilayani oleh provider rekanan TelkoMedika.
                </p>
                <p>
                    Saat ini layanan TelkoMedika dapat ditemui di kota-kota besar seperti Padang, Medan, Palembang, Lampung, Jakarta, Bogor, Depok, Tangerang Selatan, Bandung, Semarang, Yogyakarta, Surabaya, Malang, Madiun, Denpasar, Makassar, Balikpapan, dan Banjarmasin serta di kota lainnya yang dapat dilayani oleh provider rekanan TelkoMedika.
                </p>
            </div>
        </div>
    </main>
</body>
</html>
