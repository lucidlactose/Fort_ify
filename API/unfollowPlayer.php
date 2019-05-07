<?php

include "dbConnection.php";
$conn = getDatabaseConnection();

// $np = array();
// $np[":follower"] = $_POST["me"];
// $np[":followee"] = $_POST["them"];

$me_id = $_POST['me'];
$them_id = $_POST["them"];


$sql = "DELETE FROM following WHERE following_id = '$them_id' AND user_id = '$me_id'";


$stmt = $conn->prepare($sql);
$stmt->execute($np);
// $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($records);

echo json_decode(array("status"=>"success"))

?>