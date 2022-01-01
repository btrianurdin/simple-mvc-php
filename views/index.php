<?php $this->include('templates/header'); ?>
<div class="card my-4">
  <div class="card-body text-center">
    <h3>Data Mahasiswa</h3>
    <p class="m-0 p-0">Aplikasi CRUD menggunakan Simple MVC PHP</p>
  </div>
</div>
<div class="mt-5">
  <a href="add" class="btn btn-primary mb-3">Tambah</a>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Lengkap</th>
          <th>NIM</th>
          <th>TTL</th>
          <th>Jurusan</th>
          <th>Angkatan</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Bagus Trianurdin</td>
          <td>5190311100</td>
          <td>Indramayu, 27-02-2001</td>
          <td>Sistem Informasi</td>
          <td>2019</td>
          <td>tes</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php $this->include('templates/footer'); ?>