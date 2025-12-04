<table class="table table-hover table-bordered my-2">
    <h2 >List Buku Tamu</h2>
    <a class="btn btn-primary" href="index.php?page=create" role="button">ISI DATA KAMU DISINI!</a>
    <thead>
        <tr class="table-primary text text-center">
            <th scope="col" >NO</th>
            <th scope="col" >NAMA</th>
            <th scope="col" >TANGGAL</th>
            <th scope="col" >EMAIL</th>
            <th scope="col" >KOMENTAR</th>
            <th scope="col" >AKSI</th>
        </tr>
    </thead>
    <?php
        require "koneksi.php";
        $tampil = $koneksi->query("SELECT * FROM tamu");
        $i =1;
        while ($data = mysqli_fetch_assoc($tampil)) {
        ?>
        <tr>
            <td class="text text-center"><?= $i++?></td>
            <td><?= $data['nama'];?></td>
            <td><?= $data['tanggal'];?></td>
            <td><?= $data['email'];?></td>
            <td><?= $data['komentar'];?></td>
            <td class='text-center'>
                <a class='btn btn-warning' href='index.php?id=<?= $data['id']?>&page=edit'>Edit</a>
                |
                <a class='btn btn-danger' href='proses.php?id=<?php echo $data['id']?>'>Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>