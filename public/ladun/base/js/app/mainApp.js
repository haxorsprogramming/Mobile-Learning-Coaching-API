// inisialisasi 

loadPage('apps-mobile/beranda');

function loadPage(page) {
  $("#mainApp").hide();
  $("#divLoading").show();
  $("#mainApp").load(server + page);
  setTimeout(function(){
    $("#mainApp").show();
    $("#divLoading").hide();
  }, 500);
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