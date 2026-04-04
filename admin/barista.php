<h2>Data Barista</h2>
<a href="?url=tambah_barista" class="btn btn-secondary tect">Tambah Data</a>
<table class="table table-hover mt-3 table table-striped">
    <tr class="table-dark">
        <th>No.</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $a = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM barista");
    foreach ($query as $r) {
    ?>
        <tr>
            <td><?= $a++; ?></td>
            <td><img src="image/barista/<?= $r['foto'] ?>" alt="Foto Barista" width="90px"></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['jabatan'] ?></td>
            <td><?= $r['keterangan'] ?></td>
            <td>
                <a href="?url=edit_barista&id=<?= $r['id'] ?>" class="btn btn-success">Edit</a>
                <a href="?url=hapus_barista&id=<?= $r['id'] ?>" onclick="return confirm('Hapus Data Barista?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>