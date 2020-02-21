<!DOCTYPE html>
<html>
<body>

<h1>This is the Test Page</h1>


<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
$services = $result->fetch_all();
foreach($services as $service){
  $ii=0;
  foreach($service as $lines) {
    echo $lines , "<br>";
  }
}
$result = $con->query("SELECT discription FROM myTable");
$services = $result->fetch_all();

foreach($services as $service){
  $i=0;
  foreach($service as $lines) {
    echo $lines , "<br>";
  }
}
for($i=0;$i<$ii;$i++) {
  echo $line1[$i], "description: ", $line2[$i], "<br>";
}
$con->close();
?>
<p>Bobby says hi!</p>
<img src="Bobby.jpg" width="250">

</body>
</html>
