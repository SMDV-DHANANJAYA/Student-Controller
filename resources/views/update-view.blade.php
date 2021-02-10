<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update Student</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1 class="lead text-center">Update Student</h1>
        </div>
    </div>
    <div class="container">
        <form action="/updateStudent" method="post">
            @csrf
            <input type="hidden" class="form-control" value="{{$students->id}}" name="id">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="{{$students->name}}" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="{{$students->email}}" name="email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" value="{{$students->phone}}" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>
