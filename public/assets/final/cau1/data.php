<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
// Lấy danh sách thành viên
$sql="insert into sach values(".$_POST['masach'].",'".$_POST['tuade']."',".$_POST['namxb'].",".$_POST['gia'].",'".$_POST['trangthai']."')";
echo $sql;


if ($conn->query($sql) === TRUE) {
    echo "Insert thanh cong!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

