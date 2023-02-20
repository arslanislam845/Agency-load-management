<?php
$sheets = $_POST['sheets'];
$creates = $_POST['creates'];
$bottels = $_POST['bottels'];
$stands = $_POST['stands'];
$baskets = $_POST['baskets'];

include 'db-connection.php';
$sql = "SELECT sheets,creates,bottels,stands,baskets,date FROM `newload`.`actualload` ";
           

  if (mysqli_query($conn, $sql)) {
    echo "<tr><td>".$row["sheets"]."</td><td>".$row["creates"]."</td><td>".$row["bottels"]."</td><>".$row["stands"]."</td></tr>".$row["baskets"]."</td></tr>".$row["date"]."</td></tr>";
         
  } else {
  echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);

?>