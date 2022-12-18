<?php
include "config.php";

session_start();
//untuk kunci myphp
if (isset($_POST['ndp'])) {

    $name = $_GET['namapelajar'];
    $ndp = $_GET['ndp'];
    $kursus = $_GET['kursus'];
    $nohp = $_GET['nohp'];
 
    $sql = "INSERT INTO menu (namapelajar,ndp, kursus, nohp)
    VALUES ('$namapelajar', '$ndp','$kursus', '$nohp')";

    $hasil = mysqli_query($samb, $sql);

}
?>
<!-- antara php dengan html -->
<html>
<body>

        <img class="img" src="img/logo_jtm.png" alt=""width="160" height="160"><br>
        <link rel="stylesheet" href="menu.css">

        <h3 class="register">REGISTER KEMASUKAN ASRAMA</h3>

    <fieldset>

    <div class="button">
        <button><a href="aduan.php" >Aduan</a></button>
        <button ><a href="login.php">login</a></button>
        <button><a href="logout.php">logout</a></button>
        </div>
      
            <fieldset>
            <h4>SILA ISI DI BAWAH</h4>
            </fieldset>

            <tr>
                <td>Nama Pelajar :</td><br>
                <td><input type="text" name="namapelajar" ></td>
                </tr><br>

                <tr>
                <td>NDP :</td><br>
                <td><input type="number" name="ndp" ></td>
                </tr><br>

                <tr>
                <td>kursus :</td><br>
                <td><input type="text" name="kursus" ></td> 
            </tr> <br>

            <tr>
                <td>No Hp :</td><br>
                <td><input type="number" name="nohp" ></td>
                </tr><br>
           
                <tr>
             <div class="button">
                <button><a href="">Reset</a></button>
                <button><a href="bilik.php">Pilih Bilik</a></button>
                <button><a href="edit_bilik.php">Submit</a></button>
            </div>
              </tr>

  </fieldset>
        <!-- </select> -->
   

</body>
</html>