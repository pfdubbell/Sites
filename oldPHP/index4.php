<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$message = $con->query("SELECT message FROM myTable")->message;
$con->close();
echo "$message <br/>";
echo "Hello From Sites Folder!";
?>
