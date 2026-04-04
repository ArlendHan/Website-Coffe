<h4 class="text-center mb-2">Masukkan Menu</h4>
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Nama Menu</label>
        <input type="text" name="nama" class="form-control" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Kategori</label><br>
        <input type="radio" name="kategori" value="breakfast" required id="breakfast"><label for="breakfast" class="ms-1 form-label fw-bold text-muted">Breakfast</label>
        <input type="radio" name="kategori" value="coffe" id="coffe" required class="ms-4"><label for="coffe" class=" form-label fw-bold text-muted">Coffe</label>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Harga</label>
        <input type="number" name="harga" class="form-control" required autocomplete="off">
    </div>
    <button name="simpan" type="submit" class="btn btn-success w-100"><i class="fa fa-save"> Simpan </i></button>
</form>
</table>

<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $harga = htmlspecialchars($_POST['harga']);

    $query = mysqli_query($koneksi, "INSERT INTO menu (nama, keterangan, kategori, harga) VALUES ('$nama','$keterangan','$kategori','$harga')");

    if ($query == 1) {
        echo "
        <script>
            alert('Menu Berhasil Ditambah');
            window.location.assign('?url=menu');
        </script>
        ";
    }
}
?>