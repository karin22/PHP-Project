<html>
<head>

<title>ลบหนัง</title>
</head>
<body>
<?php

    $connect = mysqli_connect("localhost","root","","move_ticket");
    $strIDmovie = $_GET["id_movie"];
    $sql2=" DELETE FROM movie WHERE id_movie = '".$strIDmovie."'  ";
    $result = mysqli_query($connect,$sql2);
    
	if(mysqli_affected_rows($connect)) {

        echo "<script type='text/javascript'>";
        echo "alert('!!!!!ลบสำเร็จ!!!!');";
        echo "window.location = 'select_movie_admin.php'; ";
        echo "</script>";
         
    }
    mysqli_close($connect);
?>
</body>
</html>