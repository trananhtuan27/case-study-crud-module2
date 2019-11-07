@extends('layouts.app')
@section('content')
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
<form method="post" action="{{route('student.update',$student->id)}}" enctype="multipart/form-data">
    @csrf
<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" value="{{$student->name}}" class="form-control" name="name"></td>
    </tr>
    <tr>
        <td>Theme:</td>
        <td><input type="text" value="{{$student->theme}}" class="form-control" name="theme"></td>
    </tr>
    <tr>
        <td>Title:</td>
        <td><input type="text" value="{{$student->title}}" class="form-control"name="title"></td>
    </tr>
    <tr>
        <td>Present:</td>
        <td><input type="text" value="{{$student->present}}" class="form-control" name="present"></td>
    </tr>
    <tr>
        <td>Image:</td>
        <td><input type="file"  name="image" ><img src="{{asset('storage/'.$student->image)}}" alt="anhdep" width="300">
        </td>
    </tr>
    <tr><button type="submit">Edit</button> </tr>
</table>

</form>
</body>
</html>
