// route 
var rToLoginProses = server + "auth/login/proses";
var rToDashboard = server + "admin/dashboard";
// vue object 
var appLogin = new Vue({
    el : '#divLogin',
    data : {

    },
    methods : {
        loginAtc : function()
        {
            let username = document.querySelector("#txtUsername").value;
            let password = document.querySelector("#txtPassword").value;
            let ds = {'username':username, 'password':password}
            axios.post(rToLoginProses, ds).then(function(res){
                if(res.data.status === 'NO_USER'){
                    pesanUmumApp('warning', 'No user !!!', 'Tidak ada user terdaftar !!!');
                }else if(res.data.status === 'WRONG_PASSWORD'){
                    pesanUmumApp('warning', 'No user !!!', 'Tidak ada user terdaftar !!!');
                }else{
                    window.location.assign(rToDashboard);
                }
            });
        }
    }
});

// inisialisasi 
document.querySelector("#txtUsername").focus();

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}