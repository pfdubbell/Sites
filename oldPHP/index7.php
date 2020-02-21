<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
  $row = $result->fetch_all();
for($i=0;$i<3;$i++) {

  echo $row[$i];
  echo " <br/>";
}
  $con->close();
echo "Hello From Sites Folder!\n";
?>
