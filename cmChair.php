<?php
session_start();
$mv=$_SESSION['movie'];
$user =$_SESSION["user"];

for($i=0;$i<count($_POST["nameChair"]);$i++){
$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");
$sql ='INSERT INTO `order`  VALUES ("", "'.$user.'", "'.$mv.'", "'.$_POST["nameChair"][$i].'");';
$result = mysqli_query($connect,$sql);

mysqli_close($connect);
header("location:select_movie_user.php");
}
?>