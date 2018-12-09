<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");

$id = $_POST['id'];
$title = $_POST['title'];
$contents = $_POST['contents'];
$author = $_POST['author'];

$sql = "update board set title = '$title',contents='$contents',author='$author' where id='$id'";
$result = mysqli_query($conn, $sql);

?>
<script>alert("글이 수정되었습니다"); window.location.replace("board_view.php?id=<?php echo $id;?>")</script>