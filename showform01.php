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

<br>
<div>
<a href="connect01.php" class="btn btn-success" role="button" aria-pressed="true">ใส่ข้อมูล</a>
</div>
<br>

<?php
        $objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
        mysqli_select_db($objConnect, "database01");
        mysqli_query($objConnect, "SET NAMES utf8");

        $sql="SELECT * FROM customer";
        $result=mysqli_query($objConnect, $sql);

        echo"<h1 class='text-center'>🙍🏼‍♂️ข้อมูลนักศึกษา</h1>";

        echo "<table width=\"700\" border=\"0\">";
        echo "<tr bgcolor=\"#993333\"> ";
        echo "<td><color=\"#FFFFFF\"> ชื่อผู้ใช้ </font></td>";
        echo "<td><color=\"#FFFFFF\"> รหัสผ่าน </font></td>";
        echo "<td><color=\"#FFFFFF\"> เพศ </font></td>";
        echo "<td><color=\"#FFFFFF\"> การศึกษา </font></td>";
        echo "<td><color=\"#FFFFFF\"> อีเมล </font></td>";
        echo "<td><color=\"#FFFFFF\"> งานอดิเรก </font></td>";
        echo "</tr>";

        while($data = mysqli_fetch_array($result)) {
        echo "<tr><td><a href='editmovies.php?Username=$data[Username]'>$data[Username]</a></td>";
        echo "<td>$data[password]</td>";
        echo "<td>$data[gender]</td>";
        echo "<td>$data[education]</td>";
        echo "<td>$data[email]</td>";
        echo "<td>$data[hobby]</td>";
        }

?>

</body>
</html>

