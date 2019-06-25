
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/bootstrap.css" type="text/css">
        <title>Blog</title>
    </head>

    <body>
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="col-md-6">
            <label>Content</label>
            <input type="text" class="form-control" name="content">
        </div>
        <div class="col-md-6">
            <label>Author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
    <?php
    include 'function.php';
    ?>


    </body>

</html>