<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect to mysql');
// Lấy danh sách thành viên
$sql = "SELECT docgia.madg, tendg, masach  from docgia, muonsach
where docgia.madg = muonsach.madg";
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
<table border="1" cellspacing="0" cellpadding="10" id="table_id">
    <tr>
        <td>STT</td>
        <td>Ten doc gia</td>
        <td>ma sach</td>
        <td>Chuc nang</td>
    </tr>
    <?php $i=1;
     while ($row = mysqli_fetch_assoc($query)):
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['tendg']; ?></td>
        <td><?php echo $row['masach']; ?></td>
        <td><button type="button" onclick="Myfunction(this,<?php  echo $row["madg"]?>,<?php  echo $row["masach"]?>)">Delete</button></td>
    </tr>
    <?php endwhile;
    mysqli_close($conn);
    ?>
</body>
<script>
    function Myfunction(element, madg, masach) {
        $(element).parent().parent().remove();
        // console.log(masach);
        // console.log(madg);
        $.ajax({
            url: 'xoa.php',
            type: 'get',
            data: {_madg: madg, _masach: masach},
            success: function (result) {
                console.log(result);

            }

        });
    }
</script>
</html>





