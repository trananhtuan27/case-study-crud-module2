@extends('layouts.app')
@section('content')

    <form method="post" action="{{route('student.add')}}" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" class="form-control" name="name"></td>
            </tr>
            <tr>
                <td>Theme:</td>
                <td><input type="text" class="form-control" name="theme"></td>
            </tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" class="form-control" name="title"></td>
            </tr>
            <tr>
                <td>Present:</td>
                <td><input type="text" class="form-control" name="present"></td>
            </tr>

            <tr>
                <td>Image:</td>
                <td><input type="file" class="form-control" name="image" ></td>
            </tr>
            <tr>
                <button type="submit">Thêm</button>
            </tr>
        </table>

    </form>
@endsection
