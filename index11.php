<!DOCTYPE html>
<html>
<body>

<h1>This is the Test Page</h1>


<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
$services = $result->fetch_all();
$i=0;
foreach($services as $service){
  $i++;
  echo "first:", $i, "-";
  $ii=0;
  foreach($service as $lines) {
    $ii++;
    echo "second:" , $ii, "-";
    echo $lines , "<br>"; //work properly, cause it implements Iterator
  }
}
$con->close();
?>
<p>Bobby says hi!</p>
<img src="Bobby.jpg" width="250">

</body>
</html>
