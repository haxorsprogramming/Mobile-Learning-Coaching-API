<div id="divEnroll">
    <h2 class="page__title">Enroll Pelajaran {{ $dataPelajaran -> getJenisPelajaran($dataPelajaran -> kd_pelajaran) -> nama }}</h2>
    <div>
        <hr />
        <div style="text-align:center;">
            <img src="{{ asset('ladun/base/file') }}/enroll_ilus_1.png" style="width:250px;">
        </div>
        <br />
        <strong>Detail Pelajaran</strong>
        <p class="welcome">
            {{ $dataPelajaran -> keterangan }}
        </p>

        <strong>Mentor</strong>
        <p class="welcome">
            {{ $dataPelajaran -> keterangan }}
        </p>

        <strong>Tangal Dimulai</strong>
        <p class="welcome">
            {{ $dataPelajaran -> setTanggal($dataPelajaran -> waktu_mulai) }}
        </p>
        <div style="text-align: center;">
        <div class="bottom-navigation__shop-cart button button--small button--orange addtocart" @click="prosesEnrollAtc()">Enroll</div>
        </div>
    </div>
</div>

<script>
var appEnroll = new Vue({
    el : '#divEnroll',
    data : {
        kdJadwal : '{{ $dataPelajaran -> kd_jadwal }}'
    },
    methods : {
        prosesEnrollAtc : function()
        {
            console.log(appEnroll.kdJadwal);
        }
    }
});
</script>