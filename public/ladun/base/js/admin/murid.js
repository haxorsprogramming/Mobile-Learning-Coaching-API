// vue object 
var appMurid = new Vue({
    el : '#appMurid',
    data : {

    },
    methods : {
        tambahMuridAtc : function()
        {
            $("#modalTambahMurid").modal("show");
        },
        hapusAtc : function(username)
        {

        },
        simpanDataAtc : function()
        {
            
        }
    }
});

// inisialisasi 
$("#tblDataMurid").dataTable();