//Buat Logika untuk Hapus Data Barista
<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM menu WHERE id='$id'");

if ($query) {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    window.location.assign('?url=menu');
    </script>";
}

?>