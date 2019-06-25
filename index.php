<?php
include 'function.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //var_dump($id);
    $sql2 = "SELECT * FROM articuls WHERE id = $id";
    $result = mysqli_query($conn,$sql2);
    /*var_dump($result); die('stopes by Kostya');*/

}else{
    $id = false;
}


if($id == true){ //если существует id
    $model =$result->fetch_array();
    $title = $model['title'];
    $content = $model['content'];
    $author = $model['author'];
}else{
    $title ='';
    $content = '';
    $author = '';
}

    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/bootstrap.css" type="text/css">
        <title>Blog</title>
    </head>

    <body>
    <div class="container">
    <?php include 'header.php'; ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<? echo $title ?>">
        </div>
        <div class="col-md-6">
            <label>Content</label>
            <input type="text" class="form-control" name="content" value="<? echo $content?>">
        </div>
        <div class="col-md-6">
            <label>Author</label>
            <input type="text" class="form-control" name="author" value="<? echo $author?>">
        </div>
        <div class="col-md-6">
            <br>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
    </div>
    <?php

    include 'footer.php';
    ?>
    </body>

</html>