// route 
var rProsesAddMurid = server + "admin/murid/add/proses";
var rProsesDeleteMurid = server + "admin/murid/delete/proses";
// vue object 
var appMurid = new Vue({
    el : '#appMurid',
    data : {
        statusForm : false
    },
    methods : {
        tambahMuridAtc : function()
        {
            $("#modalTambahMurid").modal("show");
        },
        hapusAtc : function(username)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus murid ...?', function (x) {deleteConfirm(username)});
        },
        simpanDataAtc : function()
        {
            let listForm = ['txtNama', 'txtUsername', 'txtPassword'];
            cekForm(listForm);
            if(appMurid.statusForm === false){
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
                axios.post(rProsesAddMurid, ds).then(function(res){
                    pesanUmumApp('success', 'Sukses', 'Data murid baru berhasil ditambahkan ...'); 
                    $("#modalTambahMurid").modal("hide");
                    setTimeout(function(){
                        renderPage('admin/murid', 'Data Murid');
                    }, 300);
                });
            }
        }
    }
});

// inisialisasi 
$("#tblDataMurid").dataTable();

function deleteConfirm(username)
{
    let ds = {'username':username}
    axios.post(rProsesDeleteMurid, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Data murid berhasil dihapus ...'); 
        $("#modalTambahMurid").modal("hide");
        setTimeout(function(){
            renderPage('admin/murid', 'Data Murid');
        }, 300);
    });
}

function cekForm(dField)
{
    for(let x = 0; x < dField.length; x++){
        let xForm = document.querySelector("#"+dField[x]).value;
        if(xForm.length === 0){
            appMurid.statusForm = false;
        }else{
            appMurid.statusForm = true;
        }
    }
}