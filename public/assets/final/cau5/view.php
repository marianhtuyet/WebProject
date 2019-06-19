<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
// Lấy danh sách thành viên
$sql = "select * from docgia 
        WHERE not EXISTS(
          SELECT * FROM sach where not EXISTS
           (SELECT * from muonsach
              where muonsach.madg = docgia.madg and muonsach.masach = sach.masach) )";
$query = mysqli_query($conn, $sql);
mysqli_set_charset($conn, "utf8");

if(mysqli_num_rows($query) >0)
{
    echo "<table>";
    echo "<tr>
        <td>Ma DG</td>
        <td>Ten DG</td>
</tr>";
    while($row = mysqli_fetch_assoc($query))
    {
        echo "<td>";
        echo $row['madg'];
        echo "</td>";

        echo "<td>";
        echo $row['tendg'];
        echo "</td>";
    }
    echo "</table>";
}
?>