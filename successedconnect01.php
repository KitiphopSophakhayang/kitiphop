<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrapc.min.css ">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">👨🏻‍🎓นักศึกษานักล่าปริญญา</a>
    <div class="collapse navbar-collapse" id="navbarColor01">
     
    <ul class="navbar-nav me-auto">
      
    
      </ul>
    </div>
  </div>
</nav>

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "database01");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE customer SET Username='$_GET[Username]',password='$_GET[password]',email='$_GET[email]',hobby='$_GET[hobby]'
 WHERE Username='$_GET[Username]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='showform01.php'>กลับสู่หน้าหลัก</a>";
}
?>

</body>
</html>