<?php
//sambung ke pangkalan data
require('config.php');
//pemastikan pengguna login terlebih dahulu
//include('pengesahan_guru.php');
//dapat ID guru dari URL
$id = $_GET['delete_id'];
//Hapus rekod ALUMI semasa
$result = mysqli_query($samb, "DELETE FROM menu.php WHERE menu.php= '$id'");
//papar masej jika berjaya hapus
echo "<script>alert('delete maklumat anda telah berjaya');
window.location= 'delete.php'</script>";

?>