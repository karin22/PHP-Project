<?php



            $connect = mysqli_connect("localhost","root","","move_ticket");
mysqli_set_charset($connect,"utf8");
$sql ='INSERT INTO user VALUE("'.$_POST['ID'].'","'.$_POST['password'].'","'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['telephone'].'")';
$result = mysqli_query($connect,$sql);

if(!$result){
    
  
    header("location:errorRegis.php");
}else{
    
    header("location:completeRegis.php");



   
           
     
 
}
mysqli_close($connect);


?>

