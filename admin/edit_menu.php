<h4 class="text-center mb-2">Edit Menu</h4>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM menu WHERE id='$id'");
$data_menu = mysqli_fetch_array($query);
?>
<!-- //Formulir Awal -->
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Nama Menu</label>
        <input type="text" name="nama" class="form-control" required autocomplete="off" value="<?= $data_menu['nama'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Kategori</label><br>
        <input type="radio" name="kategori" id="breakfast" value="Breakfast" <?= $data_menu['kategori'] == 'Breakfast' ? "checked" : ""; ?>><label for="breakfast" class="form-label fw-bold text-muted">Breakfast</label>
        <input type="radio" name="kategori" id="coffe" class="ms-4" value="Coffe" <?= $data_menu['kategori'] == 'Coffe' ? "checked" : ""; ?>><label for="coffe" class="form-label fw-bold text-muted">Coffe</label>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Keterangan</label>
        <input type="redio" name="keterangan" class="form-control" required value="<?= $data_menu['keterangan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Harga</label>
        <input type="number" name="harga" class="form-control" required autocomplete="off" value="<?= $data_menu['harga'] ?>">
    </div>
    <button name="simpan" type="submit" class="btn btn-success w-100"><i class="fa fa-save"> Simpan </i></button>
</form>
</table>
<!-- //Formulir Akhir -->

<?php
$id = $_GET['id'];
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "UPDATE menu SET nama='$nama', kategori='$kategori', keterangan='$keterangan', harga='$harga' WHERE id='$id'");
    if ($query == 1) {
        echo "
        <script>
        alert('Menu Diubah');
        window.location.assign('?url=menu');
        </script>
        ";
        die();
    }
}
?>