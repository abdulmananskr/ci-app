<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <?php foreach ($mahasiswa as $m) { ?>
                <form action="<?= base_url('home/editmahasiswa'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan Nama"
                            value="<?= $m['id']; ?>" hidden>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
                            value="<?= $m['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim"
                            value="<?= $m['nim']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas" value="<?= $m['kelas']; ?>">
                            <option><?= $m['kelas']; ?></option>
                            <option>12.4a</option>
                            <option>12.4b</option>
                            <option>12.4c</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" value="<?= $m['jurusan']; ?>">
                            <option><?= $m['jurusan']; ?></option>
                            <option>Teknik Komputer</option>
                            <option>Sistem Informasi</option>
                            <option>Sistem Informasi Akutansi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
                            value="<?= $m['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" onclick="window.history.go(-1)"
                            value="kembali">Close</button>
                        <button type="submit" class="btn btn-primary" value="Update">Save changes</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>