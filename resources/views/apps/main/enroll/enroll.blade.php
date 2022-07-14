<div id="divListPelajaran">
    <h2 class="page__title">Enroll Pelajaran</h2>
    <p class="welcome">
        List daftar pelajaran yang tersedia.
    </p>
    <div>
        @foreach($dataPelajaran as $pelajaran)
        <div class="card card--style-inline card--style-inline-bg card--style-round-corners" style="margin-top: 10px;padding:7px;" >
            <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/gradient-orange/news.svg" alt="" title=""></div>
            <div class="card__details">
                <h4 class="card__title"><span>({{ $pelajaran -> getJenisPelajaran($pelajaran -> kd_pelajaran) -> nama }})</span></h4>
                <p class="card__text">{{ $pelajaran -> keterangan }}</p>
                <span>Mentor <strong>{{ $pelajaran -> username_mentor }}</strong></span>
            </div>
            <div class="card__more"><a href="javascript:void(0)" @click="pilihPelajaranAtc('{{ $pelajaran -> kd_jadwal }}')"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/black/more.svg" alt="" title=""></a></div>
        </div>
        @endforeach
    </div>
</div>

<script>
    var appEnroll = new Vue({
        el : '#divListPelajaran',
        data : {

        },
        methods : {
            pilihPelajaranAtc : function(kdJadwal)
            {
                loadPage('apps-mobile/pelajaran/enroll/pelajaran/'+kdJadwal);
            }
        }
    });
</script>