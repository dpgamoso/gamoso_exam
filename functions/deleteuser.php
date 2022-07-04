<?php
$id=$_GET['id'];
include("db_connection.php");



// sql to delete a record
$sql = "DELETE FROM table_account WHERE account_number=$id";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Successfully  Deleted!'); window.location = 'adminpage.php';</script>";
} else {
   echo "<script>alert('Error in Deleting!'); window.location = 'adminpage.php;</script>";echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>