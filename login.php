<?php
session_start();


if (isset($_POST['ndp'])) 
{
    $ndp = $_POST['ndp'];
    $nam = $_POST['nama'];
    $katalaluan = $_POST['katalaluan'];
    $kursus = $_POST['kursus'];

    $sql = "INSERT INTO login (ndp,nama,katalaluan, kursus)
    VALUES ('$ndp', '$nam','$katalauan', '$kursus')";

    $hasil = mysqli_query($samb, $sql);

    if ($hasil) {
            echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
            window.location='index.php'</script>";
    }else{
            echo "<script>alert('PENDAFTARAN AHLI GAGAL!');
            window.location='login.php'</script>";
    }
} 
?>
<html>
<body>
<fieldset>
            <link rel="stylesheet" href="login.css">
        <img class="img" src="img/logo_jtm.png" alt=""width="170" height="170"><br>

    
    <h1 class="div">SISTEM KEMASUKAN ASRAMA</h1>


    <form text="boder" action="menu.php"><br>

        <fieldset>

            <h2>SILA LOGIN</h2>

            <tr>
                <td>Ndp:</td><br>
                <td><input type="" ></td>
                
                </tr><br>

                <tr>
                <td>Nama :</td><br>
                <td><input type="text" name="nama" ></td>
                
                </tr><br>

                <tr>
                <td>Katalaluan :</td><br>
                <td><input type="password" name="katalaluan" ></td> 
                
            </tr> <br>

                <tr>
                <td>IC Pelajar :</td><br>
                <td><input type="number" name="ic pelajar" ></td> 
               
            </tr> <br>

            <tr>
                <td>Kursus :</td><br>
                <td><input type="text" name="kursus" ></td> 
               
            </tr> <br>

                <button><a href="reset">Reset</a></button>
                <!-- menu.php adalah page seterusnya selepas klik Submit -->
               <button><a href="menu.php">Submit</a></button>
              <button ><a href="register.php">Register</a></button>


</select>
</form>
</fieldset>
</form>
</fieldset>
</body>
</html>