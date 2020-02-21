<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$message="nonnull";
for(i=1;$message!="NULL";i++) {
  $message = $con->query("SELECT message FROM myTable")->fetch_object()->message;
  echo "$message <br/>";
}
  $con->close();
echo "Hello From Sites Folder!";
?>
