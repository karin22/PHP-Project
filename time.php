<html>
<head><title>Select Date</title></head>
<script language="JavaScript">
function confirmDelete(){
                 return confirm('Are you sure you want to Select this?');
}
</script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body class="container bg-dark">

<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>


<?php

echo '<center>';
echo '<br>';
echo '<font color="white"> ';
echo '<h2>Movie date</h2>';
echo '<font >'; 
$connect = mysqli_connect("localhost","root","","move_ticket");
if(!isset($smtDelete)){
      $sql ='select * from date';
      $result = mysqli_query($connect,$sql);
      $numrows = mysqli_num_rows($result);
      $numfields = mysqli_num_fields($result);
}
if(!$result){
echo '<b>Error </b>'.mysqli_errno().': '.mysqli_error().'<br>';
}elseif ($numrows==0){
echo '<b>Query executed successfully but no row returns!</b>';
}else{

         echo '<table border=1 bgcolor="white" > ';
        
		 echo '<tr>';
     echo '<th>';
		 echo 'Time';
		 echo '</th>';
		 echo '<th>';
		 echo 'Day';
             echo '</th>';
             echo '<th>';
		 echo 'Price';
		 echo '</th>';
		 echo '<th>';
		 echo 'Select';
		 echo '</th>';
		 echo '</tr>';
         while ($row = mysqli_fetch_array($result)){
                     
					 echo '<form name="frmDelete'.$row['id_date'].'" method ="post" action="chair.php">'."\n";
                     echo '<tr>';
                     for ($i=1; $i<$numfields; $i++){
                             echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
                     }
					  echo '<input type="hidden" name="time" value="'.$row['id_date'].'">'."\n";
                      echo '<td><input name="Select" type="submit" value="Select" onClick="return confirmDelete();"></td>'."\n";
                      echo '</tr>'."\n";
                      echo '</form>'."\n";
                     
                     }
           
               
                     echo '</table>';
                     echo '<br>';
                   
          }

mysqli_close($connect);

echo '</center>';

?>
</body>
</html>