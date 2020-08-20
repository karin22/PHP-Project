<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ควบคุมรายการหนัง</title>
</head>
<body class=" bg-dark" >
<form class="container bg-white"  action="insert_movie.php" method=>
<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>

<a><center><h3> โปรแกรมหนังในคลัง </h3></center></a>
<?php
session_start();
echo "welcome :".$_SESSION["user"];
?>&nbsp;&nbsp;&nbsp;

<br>
<u>
<a href="logout_session.php" >LOG OUT</a>
</u>


<h4>เพิ่มหนังในคลัง >>>
 <input type="submit" name="Sumbit"value="เพิ่มหนัง"></h4>
<?php
$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");
$sql2=' SELECT * FROM movie  ';
$result = mysqli_query($connect,$sql2);

// เชื่อมม่ได้จะเเจ้ง 
if(!$result){ 
  echo mysqli_error().'<br>';
  die('Can not access database!');
  }
  
  //เชื่อม database ได้
  else{
    echo '<center><table border="2"  cellpading="0" cellspacing="0">';
    echo'<tr><td>';
    echo'ID_Movie';
    echo'</td><td>'.'picture';
    echo'</td><td>'.'Movie_name'; 
    echo'</td><td>'.'name_thai';
    echo'</td><td>'.'long time';
    echo'</td><td>'.'start_movie';
    echo'</td><td>'.'time';
    echo'</td><td>'.'cinema';
    echo'</td><td>'.'Update';
    echo'</td><td>'.'Delete';
    echo'</td></tr>';

    while($row = mysqli_fetch_array($result)){
        
        echo '<tr>';
        echo '<td align="center">'.$row['id_movie'] .'</td>';
        echo '<td align="center">'.'<img src="../image/'.$row['picture'].'" style="width:120px ;height:190px "/></td>';
        echo '<td align="center">'.$row['name_movie'].'</td>';
        echo '<td align="center">'.$row['name_thai'] .'</td>';
        echo '<td align="center">'.$row['long_time'] .'</td>';
        echo '<td align="center">'.$row['Start_screening'] .'</td>';
        echo '<td align="center">'.$row['time_movie'] .'</td>';
        echo '<td align="center">'.$row['cinema'] .'</td>';

        echo "<td align='center'><a href='update.php?id_movie=$row[0]'>edit</a></td> ";?>

        <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true)
        {window.location='delete.php?id_movie=
          <?php echo $row["id_movie"];?>';}">Delete</a></td>
          <?php
        echo '</tr>';

        }
  echo'</table></center>';
    }
    mysqli_close($connect);


?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <br>
    <br>
    <br>

</form>
</body>
</html>