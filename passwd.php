<?php 
session_start();
$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect,"utf8");

$sql = 'SELECT * FROM user WHERE id ="'.$_POST['user'].'" AND password="'.$_POST['password'].'"';
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);

if($numrows==0){
    echo "<center>";
   echo  "<font color=\"red\"> please chack user and password !!!</font>";
   echo '<br><br>';
  echo '<a href="login.php" >LOG IN</a>';
  echo "</center>";

}else{
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
    if($row[0]=="admin"){
        $_SESSION["user"]=$row[2];
        session_write_close();
        
    header("location:select_movie_admin.php");

    }
    else {
        $_SESSION["user"]=$row[2];
        session_write_close();
        
        header("location:select_movie_user.php");
    }

}
mysqli_close($connect);
}
?>