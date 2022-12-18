<?php
include "config.php";

session_start();
if (isset($_post['No_NDP'])) {
$user = $_post['Bil'];
$pass =$_post['No_NDP'];
$pass =$_post['Tajuk(Isi)'];
$pass =$_post['Tarikh'];
$pass =$_post['status'];
$pass =$_post['penyelia'];

// untuk hubungkan vscod dengan myphp
    $sql = "INSERT INTO aduan (Bil,No_NDP, Taju(Isi), Tarikh)
    VALUES ('$namapelajar', '$ndp','$kursus', '$nohp')";

    $hasil = mysqli_query($samb, $sql);
    if ($hasil) {
            echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
            window.location='bilik.php'</script>";
    }else{
            echo "<script>alert('PENDAFTARAN AHLI GAGAL!');
            window.location='edit_aduan.php'</script>";
    }
}

?>
<body>
<img class="img" src="img/logo_jtm.png" alt=""width="170" height="170"><br>
    <link rel="stylesheet" href="edit_aduan.css">

    <button><a href="menu.php">Back</a></button>
    <h6 class="edit">Sila Edit </h6>

<table>
  <tr class="name">
    <th>Bil</th>
    <th>No_NDP</th>
    <th>Tajuk/Isi</th>
    <th>Tarikh</th>
    <th>status</th>
    <th>penyelia</th>
    <th  ="250"><b>   
  </tr>
  <tr class="isi">
    <td>1</td>
    <td>23221091</td>
    <td>tandas</td>
    <td>2022-11-23</td>
    <td>pelajar</td>
    <td>warden perempuan</td>
    
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>                  
  </tr>
  <tr class="div">
    <td>2</td>
    <td>23221091</td>
    <td>dewan makan</td>
    <td>2022-11-10</td>
    <td>pelajar</td>
    <td>warden perempuan</td>

    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
  </tr>
  <tr class="header">
    <td>3</td>
    <td>23221102</td>
    <td>bilik bersepah</td>
    <td>2022-11-18</td>
    <td>pelajar</td>
    <td>warden lelaki</td>
  
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
  </tr>
  <tr class="contena">
    <td>4</td>
    <td>23221084</td>
    <td>ampayan</td>
    <td>2022-11-06</td>
    <td>pelajar</td>
    <td>warden perempuan</td>

    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
  </tr>
  <tr class="makanan">
    <td>5</td>
    <td>23221091</td>
    <td>dewan makan</td>
    <td>2022-10-31</td>
    <td>pelajar</td>
    <td>warden perempuan</td>
    
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
  </tr>
</table>
</body>
</html>