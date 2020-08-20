<html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>รายการหนังที่เลือก</title>
</head>
<body class=" bg-dark" >
<form class="container bg-white
">
<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>

</html>

<?php



$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_query($connect, "SET NAMES 'utf8' ");

$id_movie = $_REQUEST["id_movie"];
$sql2=' SELECT * FROM movie  WHERE id_movie="'.$id_movie.'"';
$result = mysqli_query($connect,$sql2) or die ("Error in query: $sql " . mysqli_error());



echo '<center><table  bgcolor="#D6D5D6" > ';

while($row = mysqli_fetch_array($result)){
    echo '<h3><center>'.$row['name_movie'].'</center><h3>'.$row['name_thai'].'<br>' ;

        echo '<tr><td>';
        echo '<center><img src="../image/'.$row['picture'].'"style="width:250px;"><br>';

    echo '</td> ';
    echo '<td>'.'ชื่อหนัง :  '.$row['name_movie'].'<br>' ;
    echo 'ชื่อไทย :  '.$row['name_thai'].'<br>' ;
    echo 'เวลา :  '.$row['long_time'].'<br>' ;
    echo 'วันที่เริ่มฉาย :  '.$row['Start_screening'].'<br>';
    echo 'เวลา :  '.$row['time_movie'].'<br>';
    echo 'โรงภาพยนต์ :  '.$row['cinema'].'<br>';


    echo '</td></tr>';

    session_start();
    $_SESSION['cinema']=$row['cinema'];
    $_SESSION['movie']=$row['name_movie'];

}




    mysqli_close($connect); //ปิดการเชื่อมต่อ database 

    ?>
    
    <html>
    <table>
    <th>
        <input type="button" value=" ยกเลิก " onclick="window.location='select_movie_user.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="button" value=" จองเก้าอี้ " onclick="window.location='chair.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->

        <input name="id_movie" type="hidden" value="<?4=$_REQUEST["id_movie"];?>

    </th>    
    </table >
<br><br>
    </html>