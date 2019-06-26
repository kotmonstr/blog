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
        <?php ?>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Заголовок</th>
                <!--<th scope="col">Контент</th>!-->
                <th scope="col">Автор</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Действие </th>
                <th scope="col">Действие 1 </th>

            </tr>
            <tbody>

            <?

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';


                $ID = $row["id"];
                $TITLE = $row["title"];
                $CONTENT = $row['content'];
                $AUTHOR = $row['author'];
                echo '<th score = "row">' . $row["id"] . '</th>';
                echo '<td>' . "<a href='index.php?id=$ID'>'$TITLE'</a>" . '</td>';
                //echo '<td>' . $row["content"] . '</td>';
                echo '<td>' . $row["author"] . '</td>';
                echo '<td>' . date("H:i:s", $row["date"]) . '</td>'; // преобразовали время из unix
                echo '<td><a href="view.php?watching_id=' . $ID . '">' . '<button type="button" class="btn btn-success">Просмотр</button>' . '</a>' . '</td>';
                echo '<td><a href="list.php?delete_id=' . $ID . '">' . '<button type="button" class="btn btn-danger">Удаление</button>' . '</a>' . '</td>';
                echo '</tr>';
            }
    ?>
    </div>
    <?php

    ?>
    </body>

</html>
<?
include 'function.php';
include 'footer.php';
?>