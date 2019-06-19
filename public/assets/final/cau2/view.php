<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bt2</title>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>

<body>
        <input type="date" name="ngmuon" onblur="Myfunction(this)">
<!--        //sự kiện khi bỏ chuột ra khỏi input ngày mượn sẽ hiện lên những sách được mượn trong ngày đó-->
        <div id="result1"></div>
</body>
<script>
    function Myfunction(obj) {
        let ngmuon = obj.value;
        console.log(ngmuon);
        $.ajax({
            url: 'data.php',
            type: 'get',
            data: {_ngmuon: ngmuon},
            success: function (result) {
                $('#result1').html(result);
                // console.log(result);
            }

        });
    }
</script>
</html>

