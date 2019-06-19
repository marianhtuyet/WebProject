<?php

$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
$sql = 'select tuade from sach, muonsach WHERE madg='.$_GET['_madg'];
//echo $sql;
$query = mysqli_query($conn, $sql);
$i = 1;
if(mysqli_num_rows($query) >0) {
    echo "<table>";
    echo "<tr>
            <td>STT</td>
            <td>Tua de sach</td>
        </tr>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";

        echo "<td>";
        echo $row['tuade'];
        echo "</td>";

        echo "</tr>";
        $i++;
    }
}

mysqli_close($conn);
?>