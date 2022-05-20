<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Murid</h4>
            <p class="card-title-desc">
                <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahMuridAtc()">
                    <i class="mdi mdi-plus-box-multiple-outline"></i>
                    Tambah Murid Baru
                </a>&nbsp;
            </p>

            <div>
                <table class="table mb-0 table-hover" id="tblDataMurid">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kontak / Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataMurid as $murid)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $murid -> getUserProfile($murid -> username) -> nama }}</td>
                        <td>{{ $murid -> getUserProfile($murid -> username) -> jk }}</td>
                        <td>{{ $murid -> getUserProfile($murid -> username) -> hp }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $murid -> username }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>