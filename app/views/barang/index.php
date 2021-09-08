<div class="container mt-2">

<div class="row">
<div class="col-lg-6">
</div>
</div>

<div class="row mt-3">
  <div class="col-lg-6">
        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary mb-2 tampilModalTambah" data-bs-toggle="modal" data-bs-target="#forModal">
  Tambah Data barang
</button>
 -->
  </div>
</div>

<div class="row mt-2 mb-3">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/barang/cari" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="cari barang..." name="keyword" id="keyword" autocomplete="off" autofocus="">
  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
</div>

    </form>
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
    </tr>
<?php endforeach; ?>

  </tbody>
</table>
</div>