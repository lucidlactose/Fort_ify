<?php

include "../dbConnection.php";
$conn = getDatabaseConnection("fortnite");

$productId = $_GET["productId"];
$sql = "INSERT INTO following (follower_username, followee_username) ".
        "VALUES (:follower, :followee)";

$np = array();
$np[":follower"] = $_POST["follower"];
$np[":followee"] = $_POST["followee"];

$stmt = $conn->prepare($sql);
$stmt->execute($np);
// $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($records);
echo json_decode(array("status"=>"success"))

?>