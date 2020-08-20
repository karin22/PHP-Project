<?php
session_start();
$sa=$_SESSION['cinema'];
$ca="status"."$sa";
for($i=0;$i<count($_POST["nameChair"]);$i++){
    $connect = mysqli_connect("localhost","root","","move_ticket");
    $sql = 'update chair set '.$ca.' ="0" where name_char="'.$_POST["nameChair"][$i].'"';
    $result = mysqli_query($connect,$sql);  
    mysqli_close($connect);
    header("location:select_movie_user.php");
}
?>