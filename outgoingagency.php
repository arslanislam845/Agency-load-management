<?php
$sheets = $_POST['sheets'];
$creates = $_POST['creates'];
$bottels = $_POST['bottels'];
$stands = $_POST['stands'];
$baskets = $_POST['baskets'];

include 'db-connection.php';

// Start transaction
$conn->begin_transaction();

// Insert into table1
$sql1 = "INSERT INTO `newload`.`outgoingloadagency` (`sheets`, `creates`, `bottels`, `stands`,`baskets`) VALUES ('$sheets', '$creates', '$bottels', '$stands','$baskets')";
if (mysqli_query($conn, $sql1)) {
    // Update table2
    $sql2 = "UPDATE `newload`.`actualloadagency` SET `sheets` = `sheets` - '$sheets', `creates` = `creates` - '$creates',`bottels`=`bottels`-'$bottels',`stands`=`stands`-'$stands',`baskets`=`baskets`-'$baskets' ,`date`=NOW()    ";
    if (mysqli_query($conn, $sql2)) {
        // Commit transaction
        $conn->commit();
        header("location:distindex.php");
    } else {
        // Rollback transaction
        $conn->rollback();
    }
} else {
    // Rollback transaction
    $conn->rollback();
}


// $sql ="UPDATE `load`.`actualload` SET `sheets` = `sheets` - '$sheets', `creates` = `creates` -'$creates',`bottels`=`bottels`-'$bottels',`stands`=`stands`-'$stands' ,`date`=NOW()";
// if (mysqli_query($conn, $sql)) {
//   header("location:index.php");
//   } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }
mysqli_close($conn);

?>