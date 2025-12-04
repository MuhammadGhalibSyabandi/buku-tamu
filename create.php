<form method="POST" action="proses.php">
    <div class="container">
        <h3 class="mt-3"> Tambah Data Tamu</h3>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" name="komentar"></textarea>
            <td>&nbsp;</td>
        </div>
        <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
        <a  href="index.php" type="button" class="btn btn-outline-secondary">Kembali</a>
    </div>
</form>