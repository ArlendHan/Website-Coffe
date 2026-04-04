<h2>Daftar Menu</h2>
<a href="?url=tambah_menu" class="btn btn-secondary ">Tambah Menu</a>
<table class="table table-hover mt-3 table table-striped">
    <tr class="table-dark">
        <th>No.</th>
        <th>Nama Menu</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $a = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM menu");
    foreach ($query as $menu) {
    ?>
        <tr>
            <td><?= $a++; ?></td>
            <td><?= $menu['nama'] ?></td>
            <td><?= $menu['kategori'] ?></td>
            <td><?= $menu['keterangan'] ?></td>
            <td>Rp <?= number_format((int)$menu['harga'], 0, ',', '.') ?></td>
            <td>
                <a href="?url=edit_menu&id=<?= $menu['id'] ?>" class="btn btn-success">Edit</a>
                <a href="?url=hapus_menu&id=<?= $menu['id'] ?>" onclick="return confirm('Hapus Menu?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>