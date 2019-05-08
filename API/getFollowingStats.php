<?php

include "dbConnection.php";
$conn = getDatabaseConnection();

$np = array();
$np[":following_id"] = $_POST["id"];

$sql = "SELECT player_stats.* 
        FROM following
        INNER JOIN player_stats
        ON following.user_id = player_stats.player_id;
        WHERE following.user_id = :following_id";

$stmt = $conn->prepare($sql);
$stmt->execute($np);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
// echo json_decode(array("status"=>"success"));

?>