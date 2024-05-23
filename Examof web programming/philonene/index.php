<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body><br><br>
    <?php
include "menu.php";
?>
    <center>
    <form action="Login.php" method="POST" class="form" ><br><br>
        <h1>LOGIN FORM</h1><br><br>
        <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
<label>Username</label><br>
<input type="text" name="uname" placeholder="enter user name" class="input" required><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="enter password" class="input"><br><br>
    <input type="submit" name="submit" value="LOGIN" id="button">
    <input type="reset" name="reset" value="CANCEL" id="btton">
    <p>Don't have Account <a href="create.php" class="hrf">REGISTER</a></p>

        </form> 
        </center> 
</body>
</html>