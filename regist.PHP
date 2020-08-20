<html>
    <head>
<style>
    p {
        font-size: 18pt;
       
    }

    .contrainer {
        margin-top: 60px;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class=" bg-dark">
    <div class="contrainer">

        <form action="registCheck.php" method="post">
            <table style="width:100%">
                <tr>
                    <th>
                        <center>
                        <font color="white">  <h1 text="white">SIGN UP</h1>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;E-mail :&nbsp;<i class="material-icons ">drafts</i>
                                <input type="text" name="email" required></p>

                            <p>&nbsp;&nbsp;&nbsp;&nbsp;Name :&nbsp;<i class="material-icons ">assignment_ind</i>
                                <input type="text" name="name" required></p>
                                
                            <p>&nbsp;&nbsp;ID user : &nbsp;<i class="material-icons ">account_circle</i>
                                <input type="text" name="ID" required></p>

                            <p>Password :&nbsp;<i class="material-icons ">vpn_key</i>
                                <input type="text" name="password" required></p>

                           

                            <p>telephone :&nbsp;<i class="material-icons ">phone</i>
                                <input type=" text" name="telephone" required></p>

                            </font>
                            <input type="submit" value="Regist">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="login.php" >Back to login</a>
                        </center>
                    </th>
                </tr>
            </table>


        </form>

    </div>
</body>

</html>