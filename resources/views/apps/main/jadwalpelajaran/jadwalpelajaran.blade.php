<div>
    <h2 class="page__title">Tambah Kegiatan</h2>
    <p class="welcome">
        Silahkan buat kegiatan yang akan digunakan untuk binaan dalam menyetor amalan.
    </p>
    <div class="form__row">
        <div class="form__select">
            <label>Kelompok Binaan</label>
            <select name="selectoptions" class="required" id="txtKelompokBinaan" style="border: 1px solid gray;border-radius:8px;">

            </select>
        </div>

    </div>
    <div class="form__row">
        <label>Nama Kegiatan</label>
        <input type="text" id="txtNamaKegiatan" value="" class="form__input required" placeholder="Nama Kegiatan" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row">
        <label>Tanggal</label>
        <input type="date" id="txtTanggal" value="" class="form__input required" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row">
        <label>Waktu Mulai</label>
        <input type="time" id="txtMulai" value="" class="form__input required" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row">
        <label>Waktu Selesai</label>
        <input type="time" id="txtSelesai" value="" class="form__input required" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row mt-40" style="text-align: center;display:none;" id="divStatusProses">
        <h4>Memproses ...</h4>
    </div>
    <div class="form__row mt-40" id="divBtnKegiatan">
        <a class="form__submit button button--main button--full" id="btnProses" onclick="prosesBuatKegiatanAtc()">Proses</a>
    </div>
</div>