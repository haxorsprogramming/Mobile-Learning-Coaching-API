<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Jenis Pelajaran</h4>
            <p class="card-title-desc">
                <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahPelajaranAtc()">
                    <i class="mdi mdi-plus-box-multiple-outline"></i>
                    Tambah Pelajaran Baru
                </a>&nbsp;
            </p>

            <div>
                <table class="table mb-0 table-hover" id="tblDataPelajaran">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pelajaran</th>
                            <th style="width: 800px;">Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPelajaran as $pelajaran)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $pelajaran -> nama }}</td>
                        <td>{{ $pelajaran -> keterangan }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $pelajaran -> kd_pelajaran }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>