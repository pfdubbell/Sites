<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
  $services = $result->fetch_all();
  foreach($services as $service){
      echo $service; //work properly, cause it implements Iterator
  }

  $con->close();
echo "Hello From Sites Folder!\n";
?>
