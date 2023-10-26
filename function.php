<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $things = [];
    while($thing = mysqli_fetch_assoc($result)) {
        $things[] = $thing;
    }
    return $things;
}


?>