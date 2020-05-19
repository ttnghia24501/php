<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Add Book</h1>
        <form action="?route=post_register" method="post">
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="category" type="text" placeholder="Category"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="description" type="text" placeholder="Descriptionn"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="price" type="text" placeholder="Price"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Add</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>