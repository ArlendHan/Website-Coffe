<h4 class="text-center mb-2">Tambah Testi</h4>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Nama</label>
        <input type="text" name="nama" class="form-control" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Foto</label>
        <input type="file" name="foto" accept=".jpg, .png, .jpeg, .pdf" class="form-control" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold text-muted">Rating</label>
        <input type="number" name="rating" min="0" max="5" step="0.1" class="form-control" required autocomplete="off">
    </div>
    <button name="simpan" type="submit" class="btn btn-success w-100"><i class="fa fa-save"> Simpan </i></button>
</form>
</table>


<?php
include '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    //Untuk mengambil data yang ada di Input Tipe File (Awal)
    $foto = strtolower($_FILES['foto']['name']);
    $tmp_name = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $akses_file = ['jpg', 'jpeg', 'png', 'pdf'];
    //Untuk mengambil data yang ada di Input Tipe File (Akhir)
    $rating = $_POST['rating'];
    $keterangan = $_POST['keterangan'];

    //Buat PathInfo
    $file_text = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

    if (in_array($file_text, $akses_file)) {
        if ($size > 1000000) {
            echo "Ukuran Gambar Terlalu Besar";
        } else {
            $tempat_fotonya = "image/pelanggan/$foto";
            move_uploaded_file($tmp_name, $tempat_fotonya);
            $query = mysqli_query($koneksi, "INSERT INTO review (nama, rating, keterangan, foto)
VALUES ('$nama', '$rating', '$keterangan', '$foto')");
?>
            <script>
                alert('Data Berhasil Ditambah');
                window.location = "?url=review";
            </script>
<?php
        }
    } else {
        echo "Format Gambar Tidak Sesuai";
    }
}
?>