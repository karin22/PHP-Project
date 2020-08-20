<html>
<body>
    <table width="900"  align="center" >
    <tbody>  
            <tr>
            <td>
               </td>
</tr>
            </tbody>
            </table>



<table width="1200" align="center">
            <tr> <br><br> <br>
                        <th><h1>จองตั่วหนัง</h1><br></th>
                </tr>
</table>
<table width="900" align="center">
<tbody>
 <br>

 <form method ='post' action ="chair2.php">
<?php
$r = array('A','B','C','D','E');
$c = array('01','02','03','04','05','06','07','08','09','10');
$connect = mysqli_connect("localhost","root","","move_ticket");
session_start();
$mv=$_SESSION['movie'];

$sa=$_SESSION['cinema'];
$ca="status"."$sa";

for($k=0;$k<count($r);$k++){
    echo '<tr>';
    for($g=0;$g<count($c);$g++){
        echo '<th>';       
        $chair = $r[$k].$c[$g];
        $sql = 'SELECT name_char,'.$ca.' FROM chair where name_char="'.$chair.'"';
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_NUM);
       if($row[1]==0){
        echo '<img src ="../img2/ch.png" width="75" height="auto"></td>';
        echo '<input name="chair[]" type="checkbox" value="'.$chair.'">';
        echo $chair;
        echo '</th>';}
        else if($row[1]==1){
            echo '<img src ="../img2/buy.png" width="75" height="auto"></td>';
        echo '<input name="" type="checkbox" disabled>';
        echo $chair;
        echo '</th>';}
        }
    }
    echo '<tr>';

mysqli_close($connect);
?> 
  </tbody>
</table> 
<br>
<p align="center" ><input type ="submit" value="confirm" style="width:100px;height:50px"></p>
 </form> 
 
</body>
</html>



