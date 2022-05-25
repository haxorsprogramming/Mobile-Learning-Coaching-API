<div id="divListPelajaran">
    <h2 class="page__title">List Jadwal Pelajaran</h2>
    <p class="welcome">
        List daftar pelajaran anda.
    </p>
    <div>
        @foreach($dataJadwal as $jadwal)
        <div class="card card--style-inline card--style-inline-bg card--style-round-corners" style="margin-top: 10px;">
            <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/gradient-orange/checked.svg" alt="" title=""></div>
            <div class="card__details">
                <h4 class="card__title">{{ $jadwal -> getJenisPelajaran($jadwal -> kd_pelajaran) -> nama }} <span>({{ $jadwal -> setTanggal($jadwal -> waktu_mulai) }})</span></h4>
                <p class="card__text">{{ $jadwal -> keterangan }}</p>
            </div>
            <div class="card__more"><a href="#"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/black/more.svg" alt="" title=""></a></div>
        </div>
        @endforeach
    </div>
</div>