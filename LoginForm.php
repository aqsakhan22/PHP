<!Doctype <!DOCTYPE html>
<html>
<head>
   
    <title>LogIn Form</title>
    <link rel="stylesheet" type="text/css" href="Logincss.css" />
   
   
</head>
<body>

<?php
$msg = '';
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
{		
   if ($_POST['username'] == 'Aqsakhan' &&  $_POST['password'] == '1234') {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = 'guest';
      
      echo 'You have entered valid username and password';
   }else {
      $msg = 'Wrong username or password';
   }
}
?>
<div class="container">
<h1> LOginFOrm<h1>
<form action="afterlogin.php" method="POST">
     <table>

        <tr>
            <td id="font">UserName</td>
            <td><input id="inputsize" type="text" name = "username" placeholder = "enter user name" /></td>
        </tr>
        <tr>
                <td id="font">password</td>
                <td><input id="inputsize" type="text"  name = "password" placeholder = "enter password" /></td>
            </tr>
            <tr>
                    <td></td>
                    <td><input type="submit" id="btnvalue" value="Login" /></td>
                </tr>
     </table>
<a href="Logout.php">LogOut Session</a>
    </form>
</div>

</body>
</html>