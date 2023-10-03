<?php

session_start();

if(isset($_SESSION['top'])){
    $top = $_SESSION['top'];
}

include "config.php";

// Fetch all records
$sql = "SELECT * FROM events WHERE top='".$top."'";
$eventsList = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_assoc($eventsList)){
    $response[] = array(
        "eventid" => $row['id'],
        "title" => $row['title'],
        "color" => $row['color'],
        "description" => $row['description'],
        "start" => $row['start_date'],
        "end" => $row['end_date'],
    );
}

echo json_encode($response);
exit;