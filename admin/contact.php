<h2>Contact Customer</h2>
<table class="table table-hover mt-3 table table-striped">
    <tr class="table-dark">
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $a = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM contact");
    foreach ($query as $con) {
    ?>
        <tr>
            <td><?= $a++; ?></td>
            <td><?= $con['nama'] ?></td>
            <td><?= $con['email'] ?></td>
            <td><?= $con['keterangan'] ?></td>
            <td>
                <a href="?url=hapus_contact&id=<?= $con['id'] ?>" onclick="return confirm('Hapus Kontak?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>