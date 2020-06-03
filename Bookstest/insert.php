<?php
 include('db.php');

//Sql Query
$sql = "INSERT INTO books (title, author, pub)
VALUES ('$_POST[title]', '$_POST[author]', '$_POST[pub]')";

if (mysqli_query($con, $sql)) {
    echo '<script>alert("Success")</script>'; 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
header ('location: index.php');
mysqli_close($con);

?>