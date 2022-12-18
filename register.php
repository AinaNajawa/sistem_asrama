<?php
include "config.php";

session_start();


if (isset($_POST['ndp'])) {
   
    $nama = $_POST['namapelajar'];
    $ndp = $_POST['ndp'];
    $ic = $_POST['no_ic'];
    $hp = $_POST['no_hp'];
    $alamat = $_POST['alamat_rumah'];
    $kursus = $_POST['kursus'];
    //tambah rekod baru ke dalam table (database)
    $sql = "INSERT INTO register (namapelajar,ndp,no_ic,no_hp,alamat_rumah, kursus)
    VALUES ('$ndp', '$nam','$katalauan', '$kursus','$alamat_rumah',)";

    $hasil = mysqli_query($samb, $sql);

    if ($hasil) {
            echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
            window.location='edit_bilik.php'</script>";
    }else{
            echo "<script>alert('PENDAFTARAN AHLI GAGAL!');
            window.location='register.php'</script>";
    }

}
?>
<html>
<body>


        <img class="img" src="img/logo_jtm.png" alt=""width="170" height="170"><br>
        <link rel="stylesheet" href="register.css">

        <h3 class="register">REGISTER KEMASUKAN ASRAMA</h3>

        <fieldset>
            <h4>SILA ISI DI BAWAH</h4>
            <tr>
                <td>Nama Pelajar :</td><br>
                <td><input type="text" name="namapelajar" ></td>
                
                </tr><br>

                <tr>
                <td>NDP :</td><br>
                <td><input  name="ndp" ></td>
                
                </tr><br>

                <tr>
                <td>Nombor Ic :</td><br>
                <td><input type="text" name="no_ic" ></td> 
                
            </tr> <br>

                 <tr>
                <td>No Hp :</td><br>
                <td><input type="number" name="no_hp" ></td>
                
                </tr><br>

            <tr>
                <td>kursus :</td><br>
                <td><input type="text" name="kursus" ></td> 
              
            </tr> <br>

                <tr>
                <td>Alamat Rumah:</td><br>
                <td><textarea name="address" id="address" cols="30" rows="10"></textarea>
                
                </tr><br>

             
                    <button class='back'><a href="menu.php">Back</a></button>
            <button><a href="">Reset</a></button>
            <button ><a href="menu.php">Submit</a></button>

         </select>  
    </fieldset>

</body>
</html>