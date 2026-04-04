<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM review WHERE id='$id'");

if($query == 1) {
    echo "<script>
    alert('Data Dihapus');
    window.location.assign('?url=review');
    </script>";
}

?>