<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>listado de salones</h1>
<ul>
    @foreach ($h as $x)
    <li>  {{$h [0] }}</li>
    @endforeach
</ul>
<ol>
<li>{{$h [1] }}</li>
<li>{{$h [2] }}</li>
<li>{{$h [3] }}</li>
</ol>
</body>
</html>
