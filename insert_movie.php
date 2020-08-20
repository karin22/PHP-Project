<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>เพิ่มหนัง</title>
</head>
<body class=" bg-dark" >
<form class="container bg-white"  action="insert.php" method="post" enctype="multipart/form-data">
<br>

<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link active " href="#"> <img src="http://www.codemobiles.com/biz/images/sf-ipad.png" width="150px"></a>
  </li>
  <li>
  <a class="nav-link active text-danger  " ><h1>ภาพยนตร์</h1></a>
</li>
</ul>
<a><center><h3>  เพิ่มรายการหนัง </h3></a>




Movie-English<input name = "movie_eng" type ="text" placeholder="ใส่ชื่อภาษาอังกฤษ" required> <br>
Movie-Thai <input  name = "movie_thai" type="text"  placeholder="ใส่ตัวชื่อภาษาไทย" required>  <br>
picture <input  name = "picfile" type="file"  required>  <br>
<input type="hidden" name="MAX_FILE_SIZE" value=1000000>
longtime <input  name = "longtime" type="text" value=" minute " placeholder="ใส่ตัวเลข" required>  <br>
Strart Screening <input  name = "screening" type="date"  required>  <br>
Time <input  name = "time_movie" type="text"  placeholder="Ex.12.00 น."   required>  <br>
Cinema 
<!-- <input  name = "cinema" type="text"  required>  <br> -->
<select name="number">
<option value="1">1</option>
<option  value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

<input type="submit" name="Sumbit"value="INSERT_MOVIE"></center>


<br><br><br><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</form>
</body>


</html>