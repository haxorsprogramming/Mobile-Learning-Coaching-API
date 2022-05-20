// route 
var rProsesAddMentor = server + "admin/mentor/add/proses";

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
                    console.log(res.data);
                });
            }
        }
    }
});

// inisiaslisasi 
$("#tblDataMentor").dataTable();

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