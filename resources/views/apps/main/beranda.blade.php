<div class="cards cards--11" style="text-align: center;">
    <div class="card card--style-cover card--style-round-corners">

        <img src="{{ asset('ladun/base/logo.png') }}" style="width:100px;">
        <h2 class="page__title">Rumah Tahfidz Hidayatul Qur’an</h2>
        <h3 id="capUser">Selamat Datang, {{ $dataUser -> nama }}</h3>

    </div>
</div>

<p class="welcome"></p>
<h3>Fitur aplikasi (Mentor)</h3>
<div class="cards cards--12">
    <div class="card card--style-icon card--style-round-corners" onclick="loadPage('apps-mobile/pelajaran/buat')">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/form.svg" alt="" title="" />
        </div>
        <h4 class="card__title">Buat Pelajaran</h4>
        <p class="card__text">Buat kelas pelajaran untuk digunakan oleh murid</p>
    </div>
    <div class="card card--style-icon card--style-round-corners">
        <div class="card__icon"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/listing.svg" alt="" title="" />
        </div>
        <h4 class="card__title">Daftar Pelajaran</h4>
        <p class="card__text">Daftar kelas untuk murid</p>
    </div>
</div>

<script>
    
</script>