<div class="cards cards--11" style="text-align: center;">
    <div class="card card--style-cover card--style-round-corners">

        <img src="{{ asset('ladun/base/logo.png') }}" style="width:100px;">
        <h2 class="page__title">Rumah Tahfidz Hidayatul Qur’an</h2>
        <h3 id="capUser">Selamat Datang, {{ $dataUser -> nama }}</h3>

    </div>
</div>

<p class="welcome"></p>
<h3>Fitur aplikasi ({{ ucfirst($role) }})</h3>

@if($role == 'mentor')
<!-- Menu untuk mentor  -->
<div class="cards cards--12">
    <div class="card card--style-icon card--style-round-corners" onclick="loadPage('apps-mobile/pelajaran/buat')">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/form.svg" alt="" title="" />
        </div>
        <h4 class="card__title">Buat Pelajaran</h4>
        <p class="card__text">Buat kelas pelajaran untuk digunakan oleh murid</p>
    </div>
    <div class="card card--style-icon card--style-round-corners" onclick="loadPage('apps-mobile/pelajaran/list')">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/listing.svg" alt="" title="" />
        </div>
        <h4 class="card__title">Daftar Pelajaran</h4>
        <p class="card__text">Daftar kelas untuk murid</p>
    </div>
</div>
@else
<!-- Menu untuk murid  -->
<div class="cards cards--12">
    <div class="card card--style-icon card--style-round-corners" onclick="loadPage('apps-mobile/pelajaran/enroll')">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/form.svg" alt="" title="" />
        </div>
        <h4 class="card__title">Enroll Pelajaran</h4>
        <p class="card__text">Buat kelas pelajaran untuk digunakan oleh murid</p>
    </div>
    <div class="card card--style-icon card--style-round-corners" onclick="loadPage('apps-mobile/pelajaran/enroll/list')">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/listing.svg" alt="" title="" />
        </div>
        <h4 class="card__title">List Pelajaran</h4>
        <p class="card__text">Daftar kelas untuk murid</p>
    </div>
</div>
@endif



<script>
    
</script>