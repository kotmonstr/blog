<?php

$conn = new mysqli('localhost', 'root', '', 'blog');
$ID = $_GET['watching_id'];
$sql = "SELECT * FROM articuls WHERE id = $ID";
$model = mysqli_query($conn, $sql);
$result = $model->fetch_array();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css" type="text/css">
        <title>Просмотр статьи <?php echo $_GET['watching_id'] ?></title>
    </head>
    <body>
    <div class="container">
    <!-- Просмотр поста !-->
    <?php
$TITLE = "" . $result['title'] . "";
$CONTENT = "" . $result['content'] . "";
$AUTHOR = "" . $result['author'] . "";
$TIME = "" . $result['date'] . "";



        if (isset($_GET) && $_GET != NULL && !empty($_GET['watching_id'])) {
            $ID = "'" . $_GET['watching_id'] . "'";
            $sql = "SELECT * FROM articuls WHERE id = $ID";

            $result = mysqli_query($conn, $sql);

            ?>

            <div class="well">
               <?php  include 'header.php'; ?>
                <h1><?php echo $TITLE ?></h1>
                <p><?php echo $CONTENT ?></p>
                <p>Автор поста: <?php echo $AUTHOR ?></p>
                <p>Дата создания <?php echo date("H:i:s", $TIME) ?></p>
            </div>

            <?php
        }

            include 'footer.php';
            ?>

    </div>
    </body>
</html>