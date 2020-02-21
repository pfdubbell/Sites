<?php
$test->new mysqli_result;
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$message = "nonnull";
for($i=1;$message!="NULL";$i++) {
  $test = $con->query("SELECT message FROM myTable LIMIT 10");
  echo "$message <br/>";
}
  $con->close();
echo "Hello From Sites Folder!";
?>
