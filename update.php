
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>จองตั๋วหนัง</title>
</head>
<body class=" bg-dark container bg-white" >

<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>
<a><center><h3>แก้ไขรายการหนัง</h3></center></a>


<?php

$connect = mysqli_connect("localhost","root","","move_ticket");

mysqli_query($connect, "SET NAMES 'utf8' ");
$id_movie = $_REQUEST["id_movie"];

$sql2=" SELECT * FROM movie  WHERE id_movie='$id_movie'";
$result = mysqli_query($connect,$sql2) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

?>
<head>
<title>แก้ไขข้อมูลหนัง</title>
<style type="text/css">
  .text{
      text-align:right;
      background-color:#EBEBEB; }   
  .text1{
      text-align:left;background-color:#EBEBEB;
  }  
</style>
</head>


<html>
<form action="update_db.php" method="post" enctype="multipart/form-data">

  <table width="700" align="center" cellpadding="0" cellspacing="0">
    <tr><td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลสมาชิก</b></td> </tr>


    <tr><td class="text">ID : </td> <td class="text1" >
         <p><input type="text" name="id_movie" value="<?php echo $id_movie; ?>" disabled='disabled' />
          <input type="hidden" name="id_movie" value="<?php echo $id_movie; ?>" /></td></tr>

    <tr><td width="117" class="text">English Name :</td>
      <td width="583" class="text1"><input name="name_movie" type="text"  value="<?=$name_movie;?>" size="30" placeholder="ภาษาอังกฤษเท่านั้น"  required  /></td></tr>
    
    <tr><td class="text">Thai Name : </td>
      <td class="text1"><input name="name_thai" type="text"  value="<?=$name_thai;?>"  size="30" placeholder="ภาษาไทยเท่านั้น"  required ></td></tr>
    
    <tr><td class="text">Picture: </td>
    <td class="text1"><input type="file" name="picfile"  value="<?=$picture;?>"  > 
    <input type="hidden" name="MAX_FILE_SIZE" value=></td> </tr>

    <tr><td class="text">Long time : </td>
      <td class="text1"><input type="text" name="long_time"  value="<?=$long_time;?>"  placeholder="ใส่ตัวเลข" required/></td></tr>

    <tr><td class="text">Start sceening : </td>
      <td class="text1"><input name="Start_screening" type="date"  value="<?=$Start_screening;?>" size="30"   required></td> </tr>

      <tr><td class="text">Time : </td>
      <td class="text1"><input name="time_movie" type="text"  value="<?=$time_movie;?>" size="10"   required></td> </tr>

      <tr><td class="text">Cinema:</td>
      <td class="text1"><input name="cinema" type="text"  value="<?=$cinema;?>" size="10"   required></td> </tr>
    <tr>
      <td class="text"></td><td class="text1">&nbsp;
        
      <input type="button" value=" ยกเลิก " onclick="window.location='select_movie_admin.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr> <td class="text"><br></td> <td class="text1"></td></tr>
    
  </table><br><br>
</form>
</html>