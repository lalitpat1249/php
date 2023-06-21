<link rel="stylesheet"href="style.css">
<h1>
    <center>
        Login
    </center>
</h1>

<form method= "post" action = "checklogin.php" enctype= "multipart/form-data">
<center>
    Username :
    <input name = "username" type = "text"/><br/><br/>
    Password :
    <input pass = "password" type = "password"/><br/><br/>
    <input type = "submit" value = "login"/>
<center>
</form>
<a href = "register.php"><br/>
    Register
</a>
<?php
echo "<br/><br/><center><a href= 'index.php'> Back to Website </center></a>";


?>
