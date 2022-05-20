<!-- modal tambah karyawan  -->
<div id="modalTambahMurid" class="modal fade" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Murid</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Nama Lengkap *</label>
                            <input type="text" class="form-control" id="txtNama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" class="form-control" id="txtUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" class="form-control" id="txtPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin *</label>
                            <select class="form-control" id="txtJk">
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" style="resize: none;" id="txtAlamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="text" class="form-control" id="txtHp" placeholder="Nomor Handphone">
                        </div>
                        <div>
                            <p>
                                <small>(*) : Harus diisi</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-primary" @click="simpanDataAtc()">Simpan Data</a>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>