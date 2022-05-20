// route 
var rProsesAddMentor = server + "admin/mentor/add/proses";
var rProsesHapusMentor = server + "admin/mentor/delete/proses";

// vue object 
var appMentor = new Vue({
    el : '#appMentor',
    data : {
        statusForm : false
    },
    methods : {
        tambahMentorAtc : function()
        {
            $("#modalTambahMentor").modal("show");
        },
        simpanDataAtc : function()
        {
            let listForm = ['txtNama', 'txtUsername', 'txtPassword'];
            cekForm(listForm);
            if(appMentor.statusForm === false){
                pesanUmumApp('warning', 'Isi field !!!', 'Harap isi semua field !!!');
            }else{
                let ds = {
                    'nama' : document.querySelector("#txtNama").value,
                    'username' : document.querySelector("#txtUsername").value,
                    'password' : document.querySelector("#txtPassword").value,
                    'jk' : document.querySelector("#txtJk").value,
                    'alamat' : document.querySelector("#txtAlamat").value,
                    'hp' : document.querySelector("#txtHp").value
                }
                axios.post(rProsesAddMentor, ds).then(function(res){
                    pesanUmumApp('success', 'Sukses', 'Data mentor baru berhasil ditambahkan ...'); 
                    $("#modalTambahMentor").modal("hide");
                    setTimeout(function(){
                        renderPage('admin/mentor', 'Data Mentor');
                    }, 300);
                });
            }
        },
        hapusAtc : function(username)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus mentor ...?', function (x) {deleteConfirm(username)});
        }
    }
});

// inisiaslisasi 
$("#tblDataMentor").dataTable();

function deleteConfirm(username)
{
    let ds = {'username':username}
    axios.post(rProsesHapusMentor, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Data mentor berhasil dihapus ...'); 
        $("#modalTambahMentor").modal("hide");
        setTimeout(function(){
            renderPage('admin/mentor', 'Data Mentor');
        }, 300);
    });
}

function cekForm(dField)
{
    for(let x = 0; x < dField.length; x++){
        let xForm = document.querySelector("#"+dField[x]).value;
        if(xForm.length === 0){
            appMentor.statusForm = false;
        }else{
            appMentor.statusForm = true;
        }
    }
}