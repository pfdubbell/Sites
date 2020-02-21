<!DOCTYPE html>
<html>
<body>

<h1>This is the Test Page</h1>


<?php
$con = new mysqli("127.0.0.1", "root", "NewPass", "mydb");
$result = $con->query("SELECT message FROM myTable");
$services = $result->fetch_all();
$ii=0;
foreach($services as $service){
  foreach($service as $lines) {
    $lines1[$ii]=$lines;
    $ii++;
  }
}
$result = $con->query("SELECT discription FROM myTable");
$services = $result->fetch_all();
$i=0;
foreach($services as $service){
  foreach($service as $lines)
    $lines2[$i]=$lines;
    $i++;
}
for($i=0;$i<$ii;$i++) {
  echo $lines1[$i], " Description: ", $lines2[$i], "<br>";
}
$con->close();
?>
<p>Bobby says hi!</p>
<img src="Bobby.jpg" width="250">

</body>
</html>
