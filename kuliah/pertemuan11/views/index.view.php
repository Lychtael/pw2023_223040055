<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row"><?= $student["id"]; ?></th>
          <td><img src="img/image.jpg" width="100" class="rounded-circle"></td>
          <td>NIM: <?= $student["nim"]; ?></td>
          <td>Nama: <?= $student["nama"]; ?></td>
          <td>Email: <?= $student["email"]; ?></td>
          <td>Jurusan: <?= $student["jurusan"]; ?></td>
          <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <!-- <?php foreach ($students as $student) : ?>
    <ul>
      <li>Nama: <?= $student["nama"]; ?></li>
      <li>NIM: <?= $student["nim"]; ?></li>
      <li>Email: <?= $student["email"]; ?></li>
      <li>Jurusan: <?= $student["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?> -->
</div>

<?php require('partials/footer.php'); ?>