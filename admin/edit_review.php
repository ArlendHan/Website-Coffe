<h4 class="text-center mb-2">Edit Data</h4>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM review WHERE id='$id'");
$datanya = mysqli_fetch_array($query);
?>
<!-- //Formulir Awal -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Nama</label>
        <input type="text" name="nama" class="form-control" required autocomplete="off" value="<?= $datanya['nama'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Foto Pelanggan</label><br>
        <img src="image/pelanggan/<?= $datanya['foto'] ?>" alt="Foto Barista" width="90px">
        <input type="hidden" name="foto_lama" value="<?= $datanya['foto'] ?>">
        <input type="file" name="foto" accept=".jpg, .png, .jpeg, .pdf" class="form-control mt-2" autocomplete="off" value="<?= $datanya['foto'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" required autocomplete="off" value="<?= $datanya['keterangan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Rating</label>
        <input type="text" name="rating" class="form-control" required autocomplete="off" value="<?= $datanya['rating'] ?>">
    </div>
    <button name="simpan" type="submit" class="btn btn-success w-100"><i class="fa fa-save"> Simpan </i></button>
</form>
</table>
<!-- //Formulir Akhir -->

<?php
$id = $_GET['id'];
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $rating = $_POST['rating'];
    $keterangan = $_POST['keterangan'];
    $foto_lama = $_POST['foto_lama'];
    //Untuk mengambil data yang ada di Input Tipe File (Awal)
    $foto = strtolower($_FILES['foto']['name']);
    $tmp_name = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $akses_file = ['jpg', 'jpeg', 'png', 'pdf'];
    //Untuk mengambil data yang ada di Input Tipe File (Akhir)

    //Buat PathInfo
    $file_text = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

    if ($foto != "") {

        if (in_array($file_text, $akses_file)) {
            if ($size > 1000000) {
                echo "Ukuran gambar terlalu besar";
            } else {
                $tempat_fotonya = "image/pelanggan/$foto";
                move_uploaded_file($tmp_name, $tempat_fotonya);
                $query = mysqli_query($koneksi, "UPDATE review SET nama='$nama', rating='$rating', keterangan='$keterangan', foto='$foto' WHERE id='$id'");
?>
                <script>
                    alert('Data berhasil diubah');
                    window.location = "?url=review";
                </script>
        <?php
            }
        } else {
            echo "Format gambar tidak sesuai";
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE review SET nama='$nama', rating='$rating', keterangan='$keterangan', foto='$foto_lama' WHERE id='$id'");
        ?>
        <script>
            alert('Data berhasil diubah');
            window.location = "?url=review";
        </script>
<?php
    }
}
?>