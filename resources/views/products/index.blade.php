<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <p>{{$title}}</p>
    @foreach ($data_arr as $key)
        <h1>{{ $key }}</h1>
    @endforeach
</body>
</html>