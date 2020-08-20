<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 5px;
  text-align: left;    
}
.contrainer{
    margin-left :30%;
    margin-right :30%;
    margin-top :10%;
  
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class=" bg-dark" >



<div class="contrainer">

<form action="passwd.php" method="post">

<table style="width:100%"  border=0>
<tr>
 <th>
 <center>
 <font color="white"> 
 <h2>Welcome to MovieTicket</h2>
 
<h4>LOG IN</h4>

&nbsp;   &nbsp; &nbsp;   &nbsp; user :&nbsp;<i class="material-icons ">account_circle</i>
<input type="text" name="user" require><br>

password :<i class="material-icons ">&nbsp;vpn_key</i>
<input type="password" name="password" require><br><br>



<input type="submit" value="Log In">&nbsp;&nbsp;&nbsp;
<a href="regist.php " > Sign up</a>


</font>

</center>
</th>
</tr>

</table>

</form>
</div>

</body>
</html>