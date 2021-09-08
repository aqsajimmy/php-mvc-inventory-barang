<div class="container mt-2">

<div class="row">
<div class="col-lg-6">
<?php Flasher::flash(); ?>
</div>
</div>

<div class="row mt-3">
  <div class="col-lg-6">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 tampilModalTambah" data-bs-toggle="modal" data-bs-target="#forModal">
  Tambah Data Mahasiswa
</button>

  </div>
</div>

<div class="row mt-2 mb-3">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
</div>

    </form>
  </div>
</div>

<div class="row">
    <div class="col-lg-6">
    <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item">
            <?= $mhs['nama']; ?>
                <a href="<?= BASEURL?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-danger float-end" onclick="return confirm('Yakin hapus data ?')">Hapus</a>
                <a href="<?= BASEURL?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?=$mhs['id']; ?>">Edit</a>
                <a href="<?= BASEURL?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-primary float-end">Detail</a>
                
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
        <label for="nama" class="form-label">Nama</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3">
</div>
        <label for="npm" class="form-label">NPM</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="npm" name="npm" aria-describedby="basic-addon3">
</div>

<label for="email" class="form-label">Email</label>
<div class="input-group mb-3">
  <input type="email" class="form-control" id="email" name="email" aria-describedby="basic-addon3">
</div>
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-select" id="jurusan" name="jurusan" aria-label="jurusan">
  <option selected>Pilih Jurusan</option>
  <option value="Akuntansi">Akuntansi</option>
  <option value="Manajemen Informatika">Manajemen Informatika
  </option>
</select>
        <input type="text" name="id" id="id" hidden="">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
