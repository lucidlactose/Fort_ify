<?php

include "dbConnection.php";
$conn = getDatabaseConnection();

$np = array();
$np[":follower"] = $_POST["follower"];

$sql = "SELECT * ".
        "FROM following ";


$stmt = $conn->prepare($sql);
$stmt->execute($np);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
?>