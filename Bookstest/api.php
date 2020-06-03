<?php
header("Content-Type:application/json");
if (isset($_GET['title'])){
 include('db.php');
 $title = $_GET['title'];
  
//Array
$return_arr = array();
    
//Sql query
$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Data från databas
    while($row = mysqli_fetch_assoc($result)) {
    $row_array['id'] = $row['id'];
    $row_array['title'] = $row['title'];
    $row_array['author'] = $row['author'];
    $row_array['pub'] = $row['pub'];

    array_push($return_arr,$row_array);
}

    echo json_encode($return_arr);
    
        
    }
} else {
   
}


//Funktion som gör jsonkod 
function response($id,$title,$author,$pub){
   
 $response['id'] = $id;
 $response['title'] = $title;
 $response['author'] = $author;
 $response['pub'] = $pub;

 $json_response = json_encode($response);
 echo $json_response;

 
}

?>