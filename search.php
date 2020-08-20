<html>
<?php


$objConnect = mysqli_connect("localhost","root","","move_ticket");
        $strSQL=" SELECT * FROM movie WHERE (name_movie LIKE '%".$_GET["txtKeyword"]."%' or name_thai LIKE '%".$_GET["txtKeyword"]."%' )";
        $objQuery = mysqli_query($objConnect,$strSQL);
      
    
    echo '<center><table border="2"  cellpading="0" cellspacing="0">';

    while($row = mysqli_fetch_array($objQuery)){
        echo '<tr><td>';
        echo '<center>'.$row['name_movie'].'</center>' ;
        echo '<center><img src="../image/'.$row['picture'].'"style="width:200px;height:300px;"><br>';
      echo "<h4><a href='select_movie.php?id_movie=$row[0]'>จองตั๋ว</a></h>";
      echo '</tr></td>';
        }
        mysqli_close($objConnect);


        ?>


<input type="button" value=" ย้อนกลับ " onclick="window.location='select_movie_user.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
</html>