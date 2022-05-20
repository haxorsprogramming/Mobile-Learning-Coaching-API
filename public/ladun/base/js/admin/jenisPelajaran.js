var rToProsesAddJenisPelajaran = server + "admin/jenis-pelajaran/add/proses";
var rToProsesHapusJenisPelajaran = server + "admin/jenis-pelajaran/delete/proses";

// vue object 
var appJenisPelajaran = new Vue({
    el : '#appJenisPelajaran',
    data : {
        
    },
    methods : {
        tambahPelajaranAtc : function()
        {
            $("#modalTambahJenisPelajaran").modal("show");
        },
        simpanDataAtc : function()
        {
            let nama = document.querySelector("#txtNama").value;
            let keterangan = document.querySelector("#txtKeterangan").value;
            if(nama.length < 1 || keterangan < 1){
                pesanUmumApp('warning', 'Isi field !!!', 'Harap isi field !!!');
            }else{
                let ds = {'nama':nama, 'keterangan':keterangan}
                axios.post(rToProsesAddJenisPelajaran, ds).then(function(res){
                    pesanUmumApp('success', 'Sukses', 'Data pelajaran baru berhasil ditambahkan ...'); 
                    $("#modalTambahJenisPelajaran").modal("hide");
                    setTimeout(function(){
                        renderPage('admin/jenis-pelajaran', 'Data Jenis Pelajaran');
                    }, 300);
                });
            }
        },
        hapusAtc : function(kdPelajaran)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus pelajaran ...?', function (x) {deleteConfirm(kdPelajaran)});
        }
    }
});

// inisialisasi 
$("#tblDataPelajaran").dataTable();

function deleteConfirm(kdPelajaran)
{
    let ds = {'kdPelajaran':kdPelajaran}
    axios.post(rToProsesHapusJenisPelajaran, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Data pelajaran baru berhasil dihapus ...'); 
        $("#modalTambahJenisPelajaran").modal("hide");
        setTimeout(function(){
            renderPage('admin/jenis-pelajaran', 'Data Jenis Pelajaran');
        }, 300);
    });
}