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
        <table class="table border-grey">
            <thead>
                <tr>
                    <th>id</th>
                    <th>post title</th>
                    <th>post author</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post -> id }}</td>
                    <td>{{ $post -> post_title }}</td>
                    <td>{{ $post -> post_author }}</td>
                    <td>{{ $post -> created_at }}</td>
                    <td>{{ $post -> updated_at }}</td>
                    <td><a href="/delete/{{ $post -> id }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="/edit/{{ $post -> id }}" class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>