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
<h1>Hello Tuyet, This list customers</h1>
<table>
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>cost</td>
        <td>discription</td>
        <td>id_type</td>

    </tr>
    @foreach($index as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->cost}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->id_product}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
