<?php

?>

{{--thừa kế từ app.blade.php--}}
@extends('layouts.app');

{{--nội dung trang con--}}
{{--dung app.css--}}
@section('content')

{{--    định ngĩa phàn thân--}}
    <div class="panel-body">
{{--        hiển thị thông báo lỗi--}}
        @include('error.503')


{{--        nhập thông tin về task--}}
        <form action="{{url('tasks')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

{{--            tên task--}}
            <div class="form-group">
                <lable for="tasks" class="col-sm-3 control-lable">Task</lable>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

{{--            nút thêm task mới--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add task
                    </button>
                </div>
            </div>
        </form>
{{--        hiển thị task hiện tại có trong database--}}
{{--        nếu có bản ghi mới hiển thị--}}
        @if(count($tasks) > 0)
            <div class="panel panel-default">
                <div class="panel-heder">
                    Current Taks
                </div>
                <div class="panel-body">
                    <table class="table table-string task-table">
                        <thead>
                            <td>Task</td>
                            <td>&nbsp;</td>
                        </thead>
{{--                        Tạo các dòng để hiện thị nội dung--}}
                        <br>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
{{--                                hiện thị tên task--}}
                                <td class="table-text">
                                    <div>{{$task->name}}</div>
                                </td>
{{--                                thêm nút xóa task--}}
                                <td>
{{--                                    task đầu tiên là roud đến task còn task thứ hai là mã id mà task muốn xóa--}}
                                    <form action="task/{{$task->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

@endsection
