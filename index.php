
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    </head>
    <body>
    <div class="container">
        <?php include "header.php"?>
        <form method="post" action="index.php" >
                    <div class="col-md-6">
                        <label>имя</label>
                        <input name="title" type="text" class="form-control">
                    </div>
                    <div class="col-md-6" >
                        <label>блог</label>
                        <input name="content" type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>автор</label>
                        <input name="autor" type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
        </form>
        <?php include "footer.php" ?>
        <?php include "function.php"?>
    </div>
    </body>

</html>
