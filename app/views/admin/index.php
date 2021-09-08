<div class="container mt-2">
<?php Flasher::flash(); ?>
<div class="row">
<div class="col-lg-6">
</div>
</div>
<div class="row mt-2 mb-2">
<h5 class="mb-2">Dashboard Administrator - Pusat Kelola Data</h5>
<div class="col-lg-6">
<div class="card">
<div class="card-header">
    Pencarian Barang
  </div>
  <div class="card-body text-center">
    <form action="<?= BASEURL; ?>/admin/cari" method="post">
      <div class="input-group mb-2">
  <input type="text" class="form-control" placeholder="cari barang..." name="keyword" id="keyword" autocomplete="off" autofocus="">
  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
</div>

    </form>
  </div>
</div>
</div>
  <div class="col-lg-6">
<div class="card">
  <div class="card-header">
    Admin Menu
  </div>
  <div class="card-body text-center">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 tampilModalTambahBarang" data-bs-toggle="modal" data-bs-target="#forModal">
  + Data Barang
</button>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 tampilModalTambahAlamat" data-bs-toggle="modal" data-bs-target="#forModal">
  + Data Alamat
</button>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 tampilModalTambahAlamat" data-bs-toggle="modal" data-bs-target="#forModal">
  Pengaturan Admin
</button>
</div>    
  </div>
</div>

</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">kategori</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Satuan</th>
      <th scope="col">Modal</th>
      <th scope="col">Toko/Teknisi</th>
      <th scope="col">Khusus</th>
      <th scope="col">User</th>
      <th scope="col" style="text-align:center;">Aksi</th>

    </tr>
  </thead>
  <tbody> 
<?php  $i=1; ?>
<?php foreach($data['brg'] as $brg) : ?>    
    <tr>
      <th scope="row"><?php echo $i;$i++; ?></th>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['kategori']?></td>
      <td><?= $brg['jumlah']?></td>
      <td><?= $brg['satuan']?></td>
      <td><?= $brg['hmodal']?></td>
      <td><?= $brg['htoko']?></td>
      <td><?= $brg['hkusus']?></td>
      <td><?= $brg['huser']?></td>
      <td>
        <a href="<?= BASEURL?>/admin/hapus/<?= $brg['id']; ?>" class="badge ms-1 btn btn-danger float-end" onclick="return confirm('Yakin hapus data ?')">D</a>
        <a href="<?= BASEURL?>/admin/edit/<?= $brg['id']; ?>" class="badge ms-1 btn btn-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?=$brg['id']; ?>">E</a>
         <a href="<?= BASEURL?>/admin/detail/<?= $brg['id']; ?>" class="badge ms-1 btn btn-primary float-end">M</a>
      </td>
    </tr>
<?php endforeach; ?>

  </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="link" method="POST">
        <input type="text" name="id" id="id" hidden="">
        <label for="nama_barang" class="form-label">Nama Barang</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
</div>

<label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" aria-label="kategori">
  <option selected>Pilih Kategori</option>
  <option value="Mouse">Mouse</option>
  <option value="Keyboard">Keyboard</option>
  <option value="Headset">Headset</option>
  <option value="Aksesoris">Aksesoris</option>
  <option value="Speaker">Speaker</option>
  <option value="Camera CCTV">Camera CCTV</option>
  <option value="DVR">DVR</option>
</select>
<label for="jumlah" class="form-label">Jumlah</label>
<div class="input-group mb-3">
  <input type="number" class="form-control" id="jumlah" name="jumlah" >
</div>
<label for="satuan" class="form-label">Satuan</label>
        <select class="form-select" id="satuan" name="satuan" aria-label="satuan">
  <option selected>Pilih Satuan</option>
  <option value="Pcs">Pcs</option>
  <option value="Box">Box</option>
  <option value="Roll">Roll</option>
  <option value="Botol">Botol</option>
</select>
<label for="hmodal" class="form-label">Harga Modal</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="hmodal" name="hmodal" >
</div><label for="htoko" class="form-label">Harga Toko/Teknisi</label>
<div class="input-group mb-3">
  <input type="htoko" class="form-control" id="htoko" name="htoko" >
</div><label for="hkusus" class="form-label">Harga Toko Khusus</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="hkusus" name="hkusus" >
</div><label for="huser" class="form-label">Harga User Umum</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="huser" name="huser" >
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
