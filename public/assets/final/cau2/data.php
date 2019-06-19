<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
// Lấy danh sách thành viên
$sql = "SELECT sach.masach, tuade from sach, muonsach where sach.masach = muonsach.masach and ngmuon='".$_GET['_ngmuon']."'";
//echo $sql;
$query = mysqli_query($conn, $sql);
mysqli_set_charset($conn, "utf8");

if(mysqli_num_rows($query) >0)
{
    $i = 1;
    echo "<table>";
    echo "<tr>
        <td>STT</td>
        <td>Ma sach</td>
        <td>Ten sach</td>
</tr>";
    while($row = mysqli_fetch_assoc($query))
    {
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";

        echo "<td>";
        echo $row['masach'];
        echo "</td>";

        echo "<td>";
        echo $row['tuade'];
        echo "</td>";
        $i++;
        echo "</tr>";
    }
    echo "</table>";
}


?>