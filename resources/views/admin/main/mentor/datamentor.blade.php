<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Mentor</h4>
            <p class="card-title-desc">
                <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahMentorAtc()">
                    <i class="mdi mdi-plus-box-multiple-outline"></i>
                    Tambah Mentor Baru
                </a>&nbsp;
            </p>

            <div>
                <table class="table mb-0 table-hover" id="tblDataMentor">
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
                    @foreach($dataMentor as $mentor)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $mentor -> getUserProfile($mentor -> username) -> nama }}</td>
                        <td>{{ $mentor -> getUserProfile($mentor -> username) -> jk }}</td>
                        <td>{{ $mentor -> getUserProfile($mentor -> username) -> hp }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $mentor -> username }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>