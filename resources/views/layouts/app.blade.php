<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | TelkoMedika</title>
    {{-- TAILWIND CSS CND --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- SWEETALERT 2 CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- BOOTSTRAP ICONS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    {{-- CK RICH TEXT EDITOR CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        const logoutBtn = document.getElementById("logout-button");
        const panggilBtn = document.getElementById("panggil-button");
        const sendBtn = document.getElementById("send-button");
        const deleteArticleBtn = document.querySelector(".delete-article");

        if (logoutBtn) {
            logoutBtn.addEventListener("click", () => {
                Swal.fire({
                    title: "Apakah anda ingin logout?",
                    showDenyButton: true,
                    confirmButtonText: "Yes",
                    denyButtonText: "No",
                    denyButtonColor: "red",
                    confirmButtonColor: "green",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire("Success!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Ups!", "", "error");
                    }
                });
            });
        }

        if (panggilBtn) {
            panggilBtn.addEventListener("click", () => {
                Swal.fire({
                    title: "Panggil pasien nomor 003",
                    showDenyButton: true,
                    confirmButtonText: "Yes",
                    denyButtonText: "No",
                    denyButtonColor: "red",
                    confirmButtonColor: "green",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire("Success!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Ups!", "", "error");
                    }
                });
            });
        }

        if (sendBtn) {
            sendBtn.addEventListener("click", () => {
                Swal.fire({
                    title: "Kirim informasi terbaru",
                    showDenyButton: true,
                    confirmButtonText: "Yes",
                    denyButtonText: "No",
                    denyButtonColor: "red",
                    confirmButtonColor: "green",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Informasi terbaru sudah dibuat",
                            showDenyButton: true,
                            confirmButtonText: "Lihat",
                            denyButtonText: "Kembali",
                            denyButtonColor: "red",
                            confirmButtonColor: "green",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = "/beranda-informasi";
                            } else if (result.isDenied) {}
                        });
                    } else if (result.isDenied) {
                        Swal.fire("Ups!", "", "error");
                    }
                });
            });
        }

        if (deleteArticleBtn) {
            deleteArticleBtn.addEventListener("click", () => {
                Swal.fire({
                    title: "Apa anda ingin menghapus informasi ini?",
                    showDenyButton: true,
                    confirmButtonText: "Yes",
                    denyButtonText: "No",
                    denyButtonColor: "red",
                    confirmButtonColor: "green",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire("Success!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Ups!", "", "error");
                    }
                });
            });
        }

        ClassicEditor
            .create(document.querySelector('#informasi-textfield'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
