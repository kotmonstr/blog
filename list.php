<?php

$conn = new mysqli('localhost', 'root', '', 'blog');
$sql = 'SELECT * FROM articuls ORDER BY date DESC';

$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/bootstrap.css" type="text/css">
        <title>Список постов</title>
    </head>

    <body>
    <div class="container">
    <?php include 'header.php'; ?>
        <?php

            while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"];
$ID = $row["id"];
$TITLE = $row["title"];
$CONTENT = $row['content'];
$AUTHOR = $row['author'];

            echo "<a href='index.php?id=$ID'>'.$TITLE.'</a><BR>";
            echo $row["content"];
            echo $row["author"];
            echo date("H:i:s",$row["date"]); // преобразовали время из unix
            echo '<br>';
            }
    ?>
    </div>
    <?php
    include 'function.php';
    include 'footer.php';
    ?>
    </body>

</html>

