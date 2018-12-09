<?php
$host = 'localhost';
$user = 'root';
$password = 'qw1234';
$database = 'test';

$conn = mysqli_connect($host, $user, $password, $database);

mysqli_query("set session character_set_connection=utf8;");
mysqli_query("set session character_set_results=utf8;");
mysqli_query("set session character_set_client=utf8;");

header('Content-Type: application/json');

$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
// echo json_encode($result);
// mysqli_query($con,"SELECT Location FROM `map_details`")
// echo $result
echo "ok"

?>