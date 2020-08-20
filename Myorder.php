<html>
<?php  

session_start();
$user=$_SESSION["user"];
echo $user;
$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");
$sql=' SELECT movie,name_chair FROM `order`   WHERE id_user="karin" order by movie ASC';
$result = mysqli_query($connect,$sql);

if(!$result){
    echo mysqli_error().'<br>';
    die('Can not access database!');
    }else{

echo '<table>';

while($row = mysqli_fetch_array($result)){
    echo '<tr><td>';
    echo  $row['movie'];
    echo '</td>';
    
    echo  '<td>';
    echo  '&nbsp;&nbsp;&nbsp;'.$row['name_chair'];
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
    }

mysqli_close($connect);




?>
<a href='select_movie_user.php'>Back</a>


</html>