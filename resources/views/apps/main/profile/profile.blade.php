<div class="user-profile mb-20">
    <?php if($jk == "P"){ ?>
        <div class="user-profile__thumb"><img src="{{ asset('ladun/base/file/') }}/ukti.jpg" alt="" title=""></div>
    <?php }else{ ?>
        <div class="user-profile__thumb"><img src="{{ asset('ladun/base/file/') }}/akhi.jpg" alt="" title=""></div>
    <?php } ?>
    
    <div class="user-profile__name">{{ $dataUser -> nama }}</div>
    <div class="buttons buttons--centered">
        <div class="info-box"><span>No Hp</span> {{ $dataUser -> hp == null ? "-": $dataUser -> hp }}</div>
        <div class="info-box"><span>Alamat</span> {{ $dataUser -> alamat == null ? "-": $dataUser -> alamat }}</div>
    </div>
</div>