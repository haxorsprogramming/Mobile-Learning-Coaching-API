<div id="divEnroll">
    <h2 class="page__title">List Enroll Pelajaran </h2>
    <div>
        <hr />
        <div style="text-align:center;">
            <img src="{{ asset('ladun/base/file') }}/enroll_ilus_1.png" style="width:200px;">
        </div>
        <br />
        <strong>List Pelajaran yang sedang diikuti</strong>
        <hr/>
        @foreach($dataPelajaran as $dp)
        <div class="card card--style-inline card--style-inline-bg card--style-round-corners" style="margin-top: 10px;padding:7px;" >
            <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/gradient-orange/news.svg" alt="" title=""></div>
            <div class="card__details">
                <h4 class="card__title"><span>({{ $dp -> pelajaranData($dp -> kd_jadwal_pelajaran) -> keterangan }})</span></h4>
                <p class="card__text"><b>{{ $dp -> dataJenisPelajaran($dp -> kd_jadwal_pelajaran) -> nama }}</b></p>
                <span>Mentor <strong>{{ $dp -> mentorData($dp -> kd_jadwal_pelajaran) -> nama }}</strong></span><br/>
                <small>Waktu daftar : {{ $dp -> waktu_daftar }}</small><br/>
                <small>Waktu selesai : {{ $dp -> waktu_selesai }}</small>
            </div>
            <div class="card__more"><a href="javascript:void(0)"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/black/more.svg" alt="" title=""></a></div>
        </div>
        @endforeach
    </div>
</div>