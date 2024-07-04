<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Mahasiawa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i
                    class="fas fa-plus"></i> Tambah Mahasiswa</button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($mahasiswa as $m) { ?>
                    <tr>
                        <th scope="row"><?= $a++ ?></th>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['kelas']; ?></td>
                        <td><?= $m['jurusan']; ?></td>
                        <td><?= $m['alamat']; ?></td>
                        <td>
                            <a href="<?= base_url('home/editmahasiswa/') . $m['id']; ?>" class="badge badge-info"><i
                                    class=" fas fa-edit"></i> edit</a>
                            <a href="<?= base_url('home/hapusmahasiswa/') . $m['id']; ?>" class="badge badge-danger"><i
                                    class=" fas fa-trash"></i> hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('home'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option>12.4a</option>
                            <option>12.4b</option>
                            <option>12.4c</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option>Teknik Komputer</option>
                            <option>Sistem Informasi</option>
                            <option>Sistem Informasi Akutansi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>