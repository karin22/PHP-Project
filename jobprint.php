<?php

echo '<table align= "center" >'.'<tr>'.'<td>';

$newfile = 'image/'.$_FILES['picfile']['name'];
if(copy($_FILES['picfile']['tmp_name'],$newfile)){
 echo'<img width="auto" height="150" src="'.$newfile.'">';
 echo "<br>";
}

echo '</tr>'.'</td>'.'</table>'.'<br>';
//-----------------------------Detail----------------------
echo '<table align= "center" border="2" bgcolor="#e982ca" >'.'<tr>'.'<td>'."<br>";
echo "<center><h1> Your Detail </h1></center>";
//----------------------name--------------------------

$name = test_input($_POST["Fname"]);
if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name)) {
  $nameErr = "Only letters allowed"; 
  echo $nameErr;
  echo "<br>";
}else{
echo "Name :".$_POST["Fname"]."<br>";
}
//----------------------lastname--------------------------
$name = test_input($_POST["Lname"]);
if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name)) {
  $nameErr = "Only letters allowed"; 
  echo $nameErr;
  echo "<br>";
}else{
echo "Lastname :".$_POST["Lname"]."<br>";
}
//----------------------sex--------------------------
if (empty($_POST["radio"])) {
    $genderErr = "Gender is required";
	echo $genderErr;
	echo "<br>";
  }else {
    echo "Sex :".$_POST['radio']."<br>";
  }
//----------------------birtdate--------------------------

if (empty($_POST["Year"])) {
    $comment = "ํYear is required";
	echo  $comment;
	echo "<br>";
  }else {
echo "Birtdate :".$_POST["Date"].$_POST["Month"].$_POST["Year"]."<br>";
  }
//----------------------address--------------------------

if (empty($_POST["Address"])) {
    $comment = "Address is required";
	echo  $comment;
	echo "<br>";
  }else {
      echo "Address :".$_POST["Address"]."<br>";
  }
//----------------------phone--------------------------

if (empty($_POST["Telephone"])) {
    $comment = "Phone is required";
	echo  $comment;
	echo "<br>";
  }else {
echo "Phone :".$_POST["Telephone"]."<br>";
  }
//----------------------homepade--------------------------
$website = test_input($_POST["Homepage"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL"; 
  echo $websiteErr ;
  echo "<br>";
}else{
 echo "Homepage :".$_POST["Homepage"]."<br>";
}
//----------------------email--------------------------
$email = test_input($_POST["Email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
  echo "<br>";
}else {
echo "Email :".$_POST["Email"]."<br>";}
//----------------------ducation--------------------------
echo "Educate:";
if (empty($_POST["Education"])) {
    $genderErr = "Education is required";
	echo $genderErr;
	echo "<br>";
  } else{
echo $_POST["Education"]."<br>";
  }
//----------------------position--------------------------

echo "Position :" ;

    if (empty($_POST["Position"])) {
        $comment = "Position is required";
        echo  $comment;
        echo "<br>";
      }else {
        for($i=0;$i<count($_POST["Position"]);$i++){
      echo $_POST["Position"][$i]."<br>";
        }
}

//----------------------salary-------------------------
echo "Salary :";
if (empty($_POST["Salary"])) {
    $comment = "Salary is required";
	echo  $comment;
    echo "<br>";
    
  }else {
echo $_POST["Salary"]."<br>";
}
// //----------------------expericence--------------------------
echo "Expericence:";
if (empty($_POST["work"])) {
    $comment = "Expericese is required";
	echo  $comment;
	echo "<br>";
  }else {
echo $_POST["work"]."<br>";
  }



  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

echo '</tr>'.'</td>'.'</table>';
?>