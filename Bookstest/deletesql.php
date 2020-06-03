<?php
 include('db.php');

//Sql query
$sql = "DELETE FROM books WHERE id='$_POST[id]'";

if (mysqli_query($con, $sql)) {
    echo '<script>alert("Success")</script>'; 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
header ('location: index.php');
mysqli_close($con);

?>