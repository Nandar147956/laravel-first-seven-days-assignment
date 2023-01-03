<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
<h1>Blog</h1>
<ol>
    @for($i=0;$i<count($fruit);$i++)
    <li>{{$fruit[$i]}}</li>
    @endfor
</ol>
</body>
</html>
