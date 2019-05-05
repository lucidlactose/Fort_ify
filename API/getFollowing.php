<?php

include "../dbConnection.php";
$conn = getDatabaseConnection("fortnite");

$sql = "SELECT * ".
        "FROM following ".
        "WHERE follower LIKE :follower";

$np = array();
$np[":follower"] = $_POST["follower"];

$stmt = $conn->prepare($sql);
$stmt->execute($np);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
// echo json_decode(array("status"=>"success"))

?>