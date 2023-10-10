<?php

session_start();
    
 if(issset($_POST['submit'])){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $verification[$username]=$password;
 
 foreach($verification as $u=>$p){
 if($username == "" || $password == ""){
     echo "You haven't provided any username or password!";
 }
 
 else if($username == $u && $password=$p){
        
     $_SESSION["loggeduser"]=$username;
     header('location: registration.html');
 }
 
 else{
     echo "Password or Username is wrong, please try again";
 }
 }
 }
 ?>



<html>
<head>
    <title>PUBLIC HOME</title>
</head>
<body>
    <table border="1" align="center" width="100%">
        <tr>
            <td colspan="3"><h1 align="left" width="">xCompany</h1> <p align="right"><a  href="home.html">Home</a>|<a href="login.php">Login</a>|<a href="regitration.php">Registration</a></p></td>
        <tr rowspan="10">
            <td>
            <form method="post" action="login.php" enctype=""> 
                <fieldset>
                    <legend>LOGIN</legend>
                User Name: <input type="text" name="username" value="" /> <br>
                Password: <input type="password" name="password" value="" /> <br>
                <hr>
                <input type="checkbox" name="" value="" /> Remember Me<br>
                <input type="submit" name="" value="Submit" /><a href="forget_password.php">Forgot Password</a>
                </fieldset>
            </form>
            </td>
        </tr>
        <tr>
            <td colspan="3"><h6 align="center" width="100%">Copyright</h6></td>
        </tr>
            
        
    </table>
</body>
</html>