//Buat Logika untuk Hapus Data Barista
<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM barista WHERE id='$id'");

if ($query) {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    window.location.assign('?url=barista');
    </script>";
}

?>