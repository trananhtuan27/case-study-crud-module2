@extends('layouts.app')
@section('content')

<body>
<a href="{{route('student.add')}}"><h3>Thêm Mới</h3></a>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên học sinh</th>
        <th scope="col">Chủ đề</th>
        <th scope="col">Tác phẩm</th>
        <th scope="col">Trình bày</th>
        <th scope="col">Ảnh học sinh</th>
        <th scope="col">Chức năng</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    @foreach($students as $key=>$value)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->theme}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->present}}</td>
            <td>
                <img src="{{asset('storage/'.$value->image)}}" alt="anhdep" width="190" height="200">
            </td>
            <td><a href="{{route('student.delete',$value->id)}}"><button type="button">Delete</button></a></td>
            <td><a href="{{route('student.edit',$value->id)}}"><button type="button">Edit</button> </a> </td>
        </tr>
    @endforeach
</table>
</body>
</html>


