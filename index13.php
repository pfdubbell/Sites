<!DOCTYPE html>
<html>
<body>

<h1>This is the Test Page</h1>


<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
$services[0] = $result->fetch_all();
$result = $con->query("SELECT discription FROM myTable");
$services[1] = $result->fetch_all();
foreach($services as $service){
  foreach($service as $lines) {
    echo $lines , "<br>"; //work properly, cause it implements Iterator
  }
}
$con->close();
?>
<p>Bobby says hi!</p>
<img src="Bobby.jpg" width="250">

</body>
</html>
