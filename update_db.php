<?php



$connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect, "utf8");


	$id_movie = $_REQUEST["id_movie"];
	$name_movie = $_REQUEST["name_movie"];
	$name_thai = $_REQUEST["name_thai"];
    $pic=$_FILES['picfile'];
	$long_time = $_REQUEST["long_time"];	
	$Start_screening = $_REQUEST["Start_screening"];
	$time = $_REQUEST["time_movie"];	
	$cinema = $_REQUEST["cinema"];




$data =date("Ymd"); //random date
$numran =(mt_rand()); //random num
$part ="../image/";
$type = strrchr($_FILES['picfile']['name'],"."); //เอาชื่อไฟล์ออกเหลือนามกุล

$newname =$data.$numran.$type;
$part_copy = $part.$newname;
move_uploaded_file($_FILES['picfile']['tmp_name'],$part_copy);

	$sql = "UPDATE movie SET  
			name_movie='$name_movie' ,
			name_thai='$name_thai' , 
			picture='$newname' ,
			long_time='$long_time' ,
			Start_screening='$Start_screening'   ,
			time_movie='$time' ,
			cinema='$cinema'
			WHERE id_movie='$id_movie' ";

$result = mysqli_query($connect, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($connect); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('!!!!!อัพเดทสำเร็จ!!!!');";
	echo "window.location = 'select_movie_admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>