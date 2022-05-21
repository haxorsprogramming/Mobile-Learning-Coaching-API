<div id="divTambahPelajaran">
    <h2 class="page__title">Tambah Jadwal Pelajaran</h2>
    <p class="welcome">
        Silahkan buat kegiatan yang akan digunakan untuk binaan dalam menyetor amalan.
    </p>
    <div class="form__row">
        <div class="form__select">
            <label>Jenis Pelajaran</label>
            <select name="selectoptions" class="required" id="txtJenisPelajaran" style="border: 1px solid gray;border-radius:8px;">
            @foreach($jenisPelajaran as $jp)
                <option value="{{ $jp -> kd_pelajaran }}">{{ $jp -> nama }}</option>
            @endforeach
            </select>
        </div>

    </div>
    <div class="form__row">
        <label>Judul Pelajaran</label>
        <input type="text" id="txtJudulPelajaran" value="" class="form__input required" placeholder="Nama Kegiatan" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row">
        <label>Keterangan / Penjelasan Pelajaran</label>
        <textarea name="TextArea" class="form__textarea required" placeholder="Keterangan" id="txtKeterangan" style="border: 1px solid gray;border-radius:8px;"></textarea>
    </div>
    <div class="form__row">
        <label>Tanggal Dimulai</label>
        <input type="date" id="txtTanggal" value="" class="form__input required" style="border: 1px solid gray;border-radius:8px;">
    </div>
    <div class="form__row mt-40" style="text-align: center;display:none;" id="divStatusProses">
        <h4>Memproses ...</h4>
    </div>
    <div class="form__row mt-40" id="divBtnKegiatan">
        <a class="form__submit button button--main button--full" id="btnProses" onclick="prosesBuatPelajaranAtc()">Proses</a>
    </div>
</div>

<script>

function prosesBuatPelajaranAtc()
{
    let jenis = document.querySelector("#txtJenisPelajaran").value;
    let judul = document.querySelector("#txtJudulPelajaran").value;
    let keterangan = document.querySelector("#txtKeterangan").value;
    let tanggal = document.querySelector("#txtTanggal").value;
    let ds = {'jenis':jenis, 'judul':judul, 'keterangan':keterangan, 'tanggal':tanggal}
    console.log(ds);
}

</script>