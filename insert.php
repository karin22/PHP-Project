<?php

$Engname=$_POST['movie_eng'];
$Thainame=$_POST['movie_thai'];
$longtime=$_POST['longtime'];
$screening=$_POST['screening'];
$pic=$_FILES['picfile'];
$time=$_POST['time_movie'];
$cinema=$_POST['number'];

if(!$pic){
  echo "<script type=\"text/javascript\">";
  echo "alert(\"โปรดเลือกรูปภาพ...<<\");";
  echo "window.history.back();";
  echo "</script>";
  exit();
 }
else{

$data =date("Ymd"); //random date
$numran =(mt_rand()); //random num
$part ="../image/";
$type = strrchr($_FILES['picfile']['name'],"."); //เอาชื่อไฟล์ออกเหลือนามกุล


$newname =$data.$numran.$type;
$part_copy = $part.$newname;
move_uploaded_file($_FILES['picfile']['tmp_name'],$part_copy);


$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");
$sql2='INSERT INTO movie VALUES("","'.$Engname.'","'.$Thainame.'","'.$newname.'","'.$longtime.'","'.$screening.'","'.$time.'","'.$cinema.'");';
$result = mysqli_query($connect,$sql2);
 
echo "<script type='text/javascript'>";
echo "alert('!!!!!เพิ่มรายการสำเร็จ!!!!');";
echo "window.location = 'select_movie_admin.php'; ";
echo "</script>";

}




  ?>