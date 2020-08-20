<html>
้
<script language="JavaScript">
function confirmChair(){
                 return confirm('เมื่อกด"ตกลง"จะไม่สามารถยกเลิกได้  ');
}

function confirmCancel(){
                 return confirm(' กด"ตกลง"เพื่อยกเลิกรายการ ');
}
</script>

<form action="cmChair.php" method="post">
<?php
session_start();
$sa=$_SESSION['cinema'];
$mv=$_SESSION['movie'];
$ca="status"."$sa";
$user =$_SESSION["user"];

echo "สมาชิก : ".$user;
echo "<br>";
echo $mv;
echo "<br>";
echo "ที่นั่ง";

for($i=0;$i<count($_POST["chair"]);$i++){
    $connect = mysqli_connect("localhost","root","","move_ticket");
    $sql = 'update chair set '.$ca.' ="1" where name_char="'.$_POST["chair"][$i].'"';
    $result = mysqli_query($connect,$sql);  
    mysqli_close($connect);
  echo '&nbsp;&nbsp;'.$_POST["chair"][$i];
echo '<input type="hidden" name="nameChair[]" value="'.$_POST["chair"][$i].'">';
      }
         


  
echo "<br>";
?>
<input type="submit" value="confirm" onClick="return confirmChair();">&nbsp;&nbsp;&nbsp;

</form>



<form action="cancel.php" method="post">
<?php
for($i=0;$i<count($_POST["chair"]);$i++){
    $connect = mysqli_connect("localhost","root","","move_ticket");
    $sql = 'SELECT  '.$ca.'  where name_char="'.$_POST["chair"][$i].'"';
    $result = mysqli_query($connect,$sql);  
    mysqli_close($connect);
 
echo '<input type="hidden" name="nameChair[]" value="'.$_POST["chair"][$i].'">';
      }

?>
<input type="submit" value="cancel" onClick="return confirmCancel();">
</form>
</html>