// route 
var rToLogin = server + "auth/login/proses";
var rToDashboard = server + "apps-mobile/dashboard";

// vue object
var app = new Vue({
    el: "#app",
    data: {

    },
    methods: {
        loginProsesAtc: function () 
        {
            let username = document.querySelector("#txtUsername").value;
            let password = document.querySelector("#txtPassword").value;
            if(username.length < 1 || password.length < 1){
                ziTo('warning', 'isi Field !!!', 'Harap isi seluruh field !!!');
            }else{
                let ds = {'username':username, 'password':password}
                axios.post(rToLogin, ds).then(function(res){
                    if(res.data.role === 'admin'){
                        ziTo('warning', 'Gagal !!!', 'User admin tidak diizinkan !!!');
                    }else{
                        if(res.data.status === 'NO_USER'){
                            ziTo('warning', 'Gagal !!!', 'Tidak ada user terdaftar !!!');
                        }else if(res.data.status === 'WRONG_PASSWORD'){
                            ziTo('warning', 'Gagal !!!', 'Username / Password salah !!!');
                        }else{
                            window.location.assign(rToDashboard);
                        }
                    }
                });
            }
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
