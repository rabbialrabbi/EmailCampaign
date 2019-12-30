<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Age Calculation Form</h1>
<form action="/age" method="post">
    @csrf
    <p>Name: <input type="text" name="name"></p>
    <p>Date of Birth: <input type="text" name="dob"></p>
    <p> <input type="submit" value="Calcuate"></p>
</form>

@if(@$age)
    <p>Hello Mr. {{$name}} , Your age is: {{$age}}</p>
    @endif
</body>
</html>
