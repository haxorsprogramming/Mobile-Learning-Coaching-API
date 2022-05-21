// inisialisasi 
function botAtc(page)
{
    $("#mainApp").hide();
    $("#divLoading").show();
    console.log("haloo");
}

function loadPage(page) {
    $("#mainApp").hide();
    $("#divLoading").show();
    setTimeout(function () {
      $("#divLoading").hide();
      $("#mainApp").load(page);
      $("#mainApp").show();
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