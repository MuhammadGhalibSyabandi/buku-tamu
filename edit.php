<?php 
    require 'koneksi.php';
    $id = $_GET['id'];
    $tampil = $koneksi->query("SELECT * FROM tamu WHERE id = $id");
    $data = mysqli_fetch_assoc($tampil);
?>
<form method="POST" action="proses.php">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <div class="container">
        <h3 class="mt-3">Edit Buku Tamu</h3>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama'];?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'];?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" name="komentar" rows="5"><?php echo $data['komentar'];?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" value="update" name="update">Simpan</button>
        <a href="index.php" class="btn btn-outline-secondary">Kembali</a>
    </div>
</form>