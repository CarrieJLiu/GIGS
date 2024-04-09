<?php

include('./dbconnection.php');
$db = db_connect();

$result = array();


$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

if(!empty($message) && !empty($from)) {
    $sql = "INSERT INTO `newchat` (`message`, `from`) VALUES ('" .$message."', '".$from."')";
    $result['send_status'] = $db->query($sql);
}

//To print messages on screen
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `newchat` WHERE `id` > " . $start);

while($row = $items->fetch_Assoc()) {
    $result['items'][] = $row;
}


$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);




?>