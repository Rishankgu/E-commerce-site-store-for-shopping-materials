<html>
<body>
<form action="order.php" method="post">
enter your items: <input type="name" name="name"><br>
<input type="submit">
</form>
<?php
    echo "name";
    function myorder()//function declaration
    {
        echo "$name";
        echo "order id:100067589";
        echo "<br>";
        echo "items:";
        echo "<br>";
        echo "oneplus6t(smartphone)";
    }
    function myorder01()//function declaration
    {
        echo "order id:10087965";
        echo "<br>";
        echo "items:";
        echo "<br>";
        echo"mobile cover (oneplus 6t)";
    }
    myorder();
    echo "<br>";
    echo "<br>";
myorder01(); // call the function
    ?>
</body>
</html>
