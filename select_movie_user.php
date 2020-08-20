<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>จองตั๋วหนัง</title>
</head>
<body class=" bg-dark" >

<form action="search.php" name="frmSearch" method="get" action="search.php" class="container bg-white">
   
 

<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>

  <a><center><h3> หนังวันนี้ </h3></center></a>
<div align="right" class="row">
  <div class="col-6"> </div>
  <div class="col-6">  <input  name="txtKeyword" type="text" id="txtKeyword"   placeholder="ใส่ชื่อหนัง" />
    <input  type="submit" value="Search" /></div>
</div>
<?php
session_start();
echo "welcome :".$_SESSION["user"];
?>&nbsp;&nbsp;&nbsp;
<a href="Myorder.php" >My order</a>
<br>
<br>
<u>
<a href="logout_session.php" >LOG OUT</a>
</u>




<center><h4>*โปรโมชั่นพิเศษ 200 บาททุกเรื่องทุกที่หนัง</h4></center>



<?php

$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");
$sql2=' SELECT * FROM movie  order by Start_screening  DESC';
$result = mysqli_query($connect,$sql2);



if(!$result){
  echo mysqli_error().'<br>';
  die('Can not access database!');
  }else{
    echo '<center><table border="2"  cellpading="0" cellspacing="0">';

    while($row = mysqli_fetch_array($result)){
        echo '<tr><td>';
        echo '<center>'.$row['name_movie'].'</center>' ;
        echo '<center><img src="../image/'.$row['picture'].'"style="width:200px;height:300px;"><br>';
        
       
      echo "<h4><a href='select_movie.php?id_movie=$row[0]'>จองตั๋ว</a></h>";

      echo '</tr></td>';

        }
  echo'</table>';
    mysqli_close($connect);
    }


?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<br><br>
<br>

</form>
</body>
</html>