import "./bootstrap";
import Swal from "sweetalert2";

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
                    } else if (result.isDenied) {
                    }
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
