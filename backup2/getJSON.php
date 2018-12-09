<?php
require './dbconfig.php';
// header("Content-Type:text/html;charset=utf-8");

header('Content-Type: application/json');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
    echo $row['id'];
    echo $row['username'];
    echo $row['email'];
    echo $row['reg_date']
endwhile;
mysql_close($conn);
?>


