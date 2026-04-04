<h2>Testimonials Customer</h2>
<a href="?url=tambah_testi" class="btn btn-secondary ">Tambah Testi</a>
<table class="table table-hover mt-3 table table-striped">
    <tr class="table-dark">
        <th>No.</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Keterangan</th>
        <th>Rating</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $a = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM review");
    foreach ($query as $rev) {
    ?>
        <tr>
            <td><?= $a++; ?></td>
            <td><img src="image/pelanggan/<?= $rev['foto'] ?>" alt="Foto Pelanggan" width="90px"></td>
            <td><?= $rev['nama'] ?></td>
            <td><?= $rev['keterangan'] ?></td>
            <td><?= $rev['rating'] ?></td>
            <td>
                <a href="?url=edit_review&id=<?= $rev['id'] ?>" class="btn btn-success">Edit</a>
                <a href="?url=hapus_review&id=<?= $rev['id'] ?>" onclick="return confirm('Hapus Review?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>