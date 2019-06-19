<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
// Lấy danh sách thành viên
$sql = "SELECT madg, tendg  from docgia";
$query = mysqli_query($conn, $sql);
mysqli_set_charset($conn, "utf8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bt3</title>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>

<body>
    <select onchange="Myfunction(this)">
        <?php while ($row = mysqli_fetch_assoc($query) ): ?>
        <option value=<?php echo $row['madg'];?>><?php echo $row['tendg'];?></option>
        <?php endwhile; ?>
    </select>
    <div id="result1"></div>
</body>
<script>
    function Myfunction(element) {
        let madg =  $(element).val();
        console.log(madg);

        $.ajax({
            url: 'load.php',
            type: 'get',
            data: {_madg: madg},
            success: function (result) {
                $('#result1').html(result);

            }

        });
    }
</script>
</html>





