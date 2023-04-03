<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/store" method="POST">
            @csrf
            <div class="form-group mb-3 mt-3">
                <label for="title">Post Title:-</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="please enter a post title">
            </div>
            <div class="form-group mb-3">
                <label for="author">Post Author:-</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="please enter a post author">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>