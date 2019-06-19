<?php

$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
$sql = 'DELETE from muonsach where madg='.$_GET['_madg'].' and masach='.$_GET['_masach'];
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Đã xóa";
} else {
    echo "Chưa xóa được: " . mysqli_error($conn);
}
mysqli_close($conn);
?>