@extends('layout.base')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->
                    <form action="{{url('/'.$task[0]->id)}}" method="POST" class="form-horizontal">
                        @csrf
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="updatedName" id="task-name" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection