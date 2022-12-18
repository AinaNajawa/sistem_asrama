<?php
include "config.php";

if (isset($_POST['ndp'])) {
    $ic = $_POST['ndp'];
    $nam = $_POST['tarikh'];
    $jan = $_POST['status'];
    $kel = $_POST['tajuk(isi)'];
    //tambah rekod baru ke dalam table (database)
    $sql = "INSERT INTO login (ndp,tarikh,status,tajuk(isi))
    VALUES ('$ndp', '$ndp','$tarikh', '$status','$tajuk(isi)')";

     $hasil = mysqli_query($samb, $sql);

}

?>
<!-- antara php dengan html -->
<html>
<body>
<fieldset>
    
        
  
        <link rel="stylesheet" href="aduan.css">
        <img class="img" src="img/logo_jtm.png" alt=""width="160" height="160"><br>
        
        <!-- <div class="divbutton"> -->
        
        <button class="button"><a href="login.php">login</a></button>
        <button class="button"><a href="logout.php">logout</a></button>

        <!-- <input onclick="location.href-'login.php'" type="submit" value="Login"> -->

        <h3 class="register">REGISTER KEMASUKAN ASRAMA</h3>


        <fieldset>

            <h4>PENGURUSAN BILIK</h4>


            <tr>
                <tr>
                <td>NDP :</td><br>
                <td><input type="number" name="ndp" ></td>
                <!-- value="<?php echo $ndp;?>" -->
                </tr><br>

                <tr>
                <td>Status :</td><br>
                <td><input type="text" name="status" ></td>
                <!-- value="<?php echo $status;?>" -->
                </tr><br>

                <tr>
                <td>Tajuk Dan Isi:</td><br>
                <td><textarea name="taitel" id="taitel" cols="30" rows="10"></textarea>
                <!-- value="<?php echo $tajuk;?>" -->
            </tr> <br>


            <tr>
                     <td>Penyelia : <br><select name="age" id="age"> <br>
                        <option value="select">select</option>
                        <option value="nama penjaga">warden perempuan</option>
                        <option value="nama warden">Warden lelaki</option>
                    </select></td><br>
                 </tr>
                
            <tr>
                <td>Tarikh:</td><br>
                <td><input type="date" name="tarikh" ></td> 
                <!-- value="<?php echo $tarikh;?>" -->
            </tr> <br><br>

               <button class='back'><a href="menu.php">Back</a></button>
               <button><a href="">Reset</a></button>
               <button><a href="edit_bilik.php">Submit</a></button>
               <button><a href="edit_aduan.php">Edit</a></button>


        </fieldset>
    </fieldset> 
</body>
</html>