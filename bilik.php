<?php
include "config.php";

if (isset($_POST['ndp'])) {
  
    $ic = $_POST['no_bilik'];
    $nam = $_POST['ndp'];
    $jan = $_POST['ndp roomate'];
    
    $sql = "INSERT INTO bilik (no_bilik, ndp roomate,)
    VALUES ('$no_bilik', '$ndp','$ndproomate',)";

    $hasil = mysqli_query($samb, $sql);
}

?>
<!-- antara php dengan html -->
<link rel="stylesheet" href="bilik.css">

<img class="img" src="img/logo_jtm.png" alt=""width="150" height="150"><br>

        <h4 class="register">REGISTER KEMASUKAN ASRAMA</h4>
        <fieldset>

            <h4>PENGURUSAN BILIK</h4>
            <tr>
            <tr>
                <td>Nama :</td><br>
                <td><input type="text" name="nama" ></td>
                <!-- value="<?php echo $nama;?>" -->
                </tr><br>

                <tr>
                <td>NDP :</td><br>
                <td><input type="number" name="ndp" ></td>
                <!-- value="<?php echo $ndp;?>" -->
                </tr><br>

                <tr>
                <td>NDP Roomate:</td><br>
                <td><input type="number" name="ndp" ></td>
                <!-- value="<?php echo $ndp;?>" -->
                </tr><br>

                <tr>
                <td>No/Hp :</td><br>
                <td><input type="number" name="no/np" ></td> 
                <!-- value="<?php echo $icpelajar;?>" -->
            </tr> <br>

            <h5>Sila Pilih No Bilik Anda</h5>
            <h5>Satu Sahaja :</h5>
                <select name="no bilik" id="no bilik" required>
                    <option value="">No Bilik Anda</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="4PG2">008</option>
                    <option value="4PG2">009</option>
                    <option value="4PG2">010</option>
                    <option value="4PG2">011</option>
                    <option value="4PG2">012</option>
                    <option value="4PG2">013</option>
                    <option value="4PG2">014</option>
                    <option value="4PG2">015</option>
                    <option value="4PG2">016</option>
                    <option value="4PG2">017</option>
                    <option value="4PG2">018</option>
                    <option value="4PG2">019</option>
                    <option value="4PG2">020</option>
                    <option value="4PG2">021</option>
                    <option value="4PG2">022</option>
                    <option value="4PG2">023</option>
                    <option value="4PG2">024</option>
                    <option value="4PG2">025</option>
                    <option value="4PG2">026</option>
                    <option value="4PG2">027</option>
                    <option value="4PG2">028</option>
                    <option value="4PG2">029</option>
                    <option value="4PG2">030</option>
                </select><br>
                *Pilihan hanya dibenarkan sekali sahaja. <br>

                <button><a href="">Reset</a></button>
                <button><a href="edit_bilik.php">Submit</a></button>
                <button class='back'><a href="menu.php">Back</a></button>
           
        </select>
        </fieldset>
        </form>
</body>
</html>