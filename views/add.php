<?php $this->include('templates/header'); ?>
<div class="row justify-content-center mb-4">
  <div class="col-5">
    <div class="card my-4">
      <div class="card-body text-center">
        <h3>Tambah Data Mahasiswa</h3>
      </div>
    </div>
    <div class="mt-3">
      <a href="<?= __BASEURL__ ?>" class="btn btn-warning mb-3">Kembali</a>
      <form method="POST" action="">
        <div class="mb-3">
          <label class="form-label">NIM</label>
          <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="mb-3">
          <label class="form-label">Tempat Lahir</label>
          <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
        </div>
        <div class="mb-3">
          <label class="form-label">Jurusan</label>
          <input type="date" name="jurusan" class="form-control" placeholder="Masukkan Jurusan">
        </div>
        <div class="mb-3">
          <label class="form-label">Angkatan</label>
          <input type="number" name="angkatan" class="form-control" placeholder="Masukkan Angkatan">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success w-100">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $this->include('templates/footer'); ?>