<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");

for($i=0;$i<3;$i++) {
  $row = $result->fetch_row();
  echo $row[$i];
  echo " <br/>";
}
  $con->close();
echo "Hello From Sites Folder!\n";
?>
