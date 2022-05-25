// inisialisasi 
setTimeout(function(){
  loadPage('apps-mobile/beranda');  
}, 700);

function loadPage(page) {
  $("#mainApp").hide();
  $("#divLoading").show();
  $("#mainApp").load(server + page);
  setTimeout(function(){
    $("#mainApp").show();
    $("#divLoading").hide();
  }, 500);
}

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}

function ziTo(tipe, judul, message) {
    if (tipe === "info") {
    } else if (tipe === "success") {
      iziToast.success({
        title: judul,
        message: message,
        position: "bottomCenter",
        timeout: 1000,
        pauseOnHover: false,
        onClosed: function () {},
      });
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