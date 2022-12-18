<?php
include "config.php";

session_start();
if (isset($_post['Bil']))
 {
$user = $_post['Nama'];
$pass =$_post['No Bilik'];
$pass =$_post['NDP'];
$pass =$_post['NDPRoomate'];
// arahan sql akan dilaksanakan
$query = mysqli_query($samb,"SELECT * FROM edit_bilik
 WHERE bilik ='$user' AND
 katalaluan= '$pass' ");
}
?>
<body>

    <img class="img" src="img/logo_jtm.png" alt=""width="170" height="170"><br>
    <link rel="stylesheet" href="edit_bilik.css">  

<table>
  <tr class="name">
    <th>Bil</th>
    <th>No Bilik</th>
    <th>NDP</th>
    <th>NDP Roomate</th>
    <td></td>
    <td></td>
    <th  ="250"><b>
</th>
  <tr>
    <td>1</td>
    <td>69</td>
    <td>23221091</td>
    <td>23221084</td>

    <th><b>
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
    <td><input type="submit" nama="update" value="kemaskini"></td>
    <!-- pergi ke page bilik -->
  
  </tr>
  <tr>
    <td>2</td>
    <td>14</td>
    <td>23221095</td>
    <td>23221098</td>

    <th><b>
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
    <td><input type="submit" nama="update" value="kemaskini"></td>
    <!-- pergi ke page bilik -->
  </tr>
  <tr>
    <td>3</td>
    <td>12</td>
    <td>23221096</td>
    <td>23221101</td>
    <th><b>
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
    <td><input type="submit" nama="update" value="kemaskini"></td>
    <!-- pergi ke page bilik -->
  </tr>
  <tr>
    <td>4</td>
    <td>62</td>
    <td>23221102</td>
    <td>23221092</td>
    <th><b>
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
    <td><input type="submit" nama="update" value="kemaskini"></td>
    <!-- pergi ke page bilik -->
  </tr>
  <tr>
    <td>5</td>
    <td>13</td>
    <td>23221147</td>
    <td>23221023</td>
    <th><b>
    <td><a href="delete.php"><input type="submit" nama="delete" value="padam" ></td>
    <td><input type="submit" nama="update" value="kemaskini"></td>
    <!-- pergi ke page bilik -->
  </tr>
  <button><a href="menu.php">Back</a></button>

</table>
</body>
</html>