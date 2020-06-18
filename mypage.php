<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>register</title>
<link href="register.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="loginbox">
<img src="images.png" alt="icons" class="avatar">
<h1>Login Here</h1>
<form action="" method="post">
<p>Username</p>
<input type="text" name="username1" placeholder="Enter username">
<p>Password</p>
<input type="password" name="password1" placeholder="Enter password" >
<input type="Submit" name="submit" value="login">
<a href="forget.html">Forget Password?</a><br>
<a href="signup.php">Don't have an account?</a>
<p>Remember me</p><input type="checkbox" name="remember" >
</form>
</div>
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    if(isset($_POST["submit"]))
    {
        $con = mysqli_connect ($host , $username, $password );
       mysqli_select_db ( $con ,"myDB");
        $res = mysqli_query ( $con,"select * from MyGuests where username ='$_POST[username1]' && password='$_POST[password1]'");
        if($row=mysqli_fetch_array($res))
        {
            
            echo "login succesfull";
            $_SESSION['username'] =$userp;
            header('location:mysite.php');
        }
        else{
            echo "login failed";
            header('location:mypage.php');
        }

}
?>

<?php
    $cookie_name = "username";
    $cookie_value = "password";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
<html>
<body>

<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>
