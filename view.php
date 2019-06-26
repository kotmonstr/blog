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
    /*
    * Просмотр поста
    */
<?php
$TITLE = "'" . $result['title'] . "'";
$CONTENT = "'" . $result['content'] . "'";
$AUTHOR = "'" . $result['author'] . "'";
$TIME = "'" . $result['date'] . "'";



        if (isset($_GET) && $_GET != NULL && !empty($_GET['watching_id'])) {
            $ID = "'" . $_GET['watching_id'] . "'";
            $sql = "SELECT * FROM articuls WHERE id = $ID";

            $result = mysqli_query($conn, $sql);
            var_dump($result);
            ?>

            <div class="well">
                <h1>title<?php echo $TITLE ?></h1>
                <p>content <?php echo $CONTENT ?></p>
                <p>author <?php echo $AUTHOR ?></p>
                <p>date <?php echo $TIME ?></p>
            </div>

            <?php
        }
            include 'header.php';
            include 'footer.php';
            ?>

    </div>
    </body>
</html>