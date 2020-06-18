<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
     <link href="signup.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
   <div class="loginbox">
       <h3>Signup </h3>
       <form action="" method="post">
           <p>Name</p>
           <input type="text" name="username" placeholder="Enter username">
            <p>E-mail</p>
           <input type="text" name="email" placeholder="Enter email">
            <p>Contact no</p>
           <input type="number" name="num" placeholder="Enter contact no">
           <p>Password</p>
           <input type="password" name="password" placeholder="Enter password">
           <p>DOB</p>
           <input type="date" name="DOB" placeholder="Enter DOB">
	
           <input type="Submit" name="submit" value="Submit">
           <a href="mypage.php">Back</a><br>
           
       </form>
   </div>
       <?php
           $host = "localhost";
           $username = "root";
           $password = "";
           if(isset($_POST["submit"]))
           {
               $conn = mysqli_connect ($host , $username, $password );
              // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

mysqli_select_db ( $conn ,"myDB");
               $sql = "INSERT INTO MyGuests (username, email,contact_no,password,DOB)
               VALUES ('$_POST[username]', '$_POST[email]', '$_POST[num]', '$_POST[password]', '$_POST[DOB]')";
               
               if ($conn->query($sql) === TRUE) {
                   echo "New record created successfully";
               } else {
                   echo "Error: " . $sql . "<br>" . $conn->error;
               }
           }
           ?>
</body>
</html>
