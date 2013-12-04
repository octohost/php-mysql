<?php

echo "DB: $DB_PORT_3306_TCP_PORT";
echo "DB: $DB_PORT_3306_TCP_ADDR";

<?php
$con=mysqli_connect("$DB_PORT_3306_TCP_ADDR","username","password","ambassador");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM the_goods");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }

mysqli_close($con);
?>
