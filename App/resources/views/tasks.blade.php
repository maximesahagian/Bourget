<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!--Create Task Form-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {!! csrf_field() !!}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <!-- TODO: Current Tasks -->
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                @foreach ($tasks as $task)
                                        @if(!$task->is_done)
                                    <tr>
                                        <!-- Task Name -->

                                            <tr>
                                            <td class="table-text">
                                                <div>{{ $task->name }}</div>
                                            </td>
                                        <td>Created at {{date_format($task->created_at, 'd/m/Y H:i')}}</td>
                                        <td>
                                            <!-- TODO: Delete Button -->
                                            <form class="form-group" action="{{ url('task/'.$task->id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                            <form class="form-group" method="post" action="{{route('task-done',['task'=>$task])}}">
                                                {!! csrf_field() !!}
                                                <button class="btn btn-success" type="submit">Done</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tasks Done
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach($tasks as $task)
                                @if($task->is_done)
                                    <tr>
                                        <!-- Task Name -->

                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>

                                        <td>Done at {{date_format(new DateTime($task->done_at), 'd/m/Y H:i')}}</td>
                                        <td>
                                            <!-- TODO: Delete Button -->
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!--Create Task Form-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Newsletters
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                            <!-- New Task Form -->
                    <form action="{{ url('newsletters') }}" method="POST" class="form-horizontal">
                        {!! csrf_field() !!}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-6">
                                <input type="email" name="mail" id="email" class="form-control">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection