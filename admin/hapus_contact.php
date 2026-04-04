<?php
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM contact WHERE id='$id'");
if ($query) {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    window.location.assign('?url=contact');
    </script>";
}

?>