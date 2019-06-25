<?php
$conn = new mysqli('localhost', 'root', '', 'bloog');
$sql = 'SELECT * FROM articuls ORDER BY data DESC';
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <title>Список постов</title>
</head>

<body>
<div class="container">
    <?php include 'header.php';

    while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"];
            echo $row["title"];
            echo $row["content"];
            echo $row["autor"];
            echo date("H:i:s",$row["data"]); // преобразовали время из unix
        echo '<br>';
    }
    ?>
</div>
<?php

include 'footer.php';
?>
</body>

</html>
