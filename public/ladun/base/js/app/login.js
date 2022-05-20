// vue object
var app = new Vue({
    el: "#app",
    data: {

    },
    methods: {
        loginProsesAtc: function () 
        {

        },
    },
});

// inisialisasi
document.querySelector("#txtUsername").focus();

function ziTo(tipe, judul, message) {
    if (tipe === "info") {
    } else if (tipe === "success") {
    } else if (tipe === "warning") {
        iziToast.error({
            title: judul,
            message: message,
            position: "bottomCenter",
            timeout: 1000,
            pauseOnHover: false,
            onClosed: function () {},
        });
    } else if (tipe === "error") {
        iziToast.error({
            title: judul,
            message: message,
            position: "bottomCenter",
            timeout: 1000,
            pauseOnHover: false,
            onClosed: function () {},
        });
    }
}
