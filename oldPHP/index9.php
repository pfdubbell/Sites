<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
if($services && $services->num_rows>0){
  $services->fetch_all(MYSQLI_ASSOC);
}

for($i=0;$i<3;$i++) {

  echo $service;
  echo " <br/>";
}
  $con->close();
echo "Hello From Sites Folder!\n";
?>
