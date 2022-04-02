<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <title>Daily Task</title>
        <meta name="viewpoint" content="widht=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <h1>Daily Tasks</h1>
                <div class="rows">
                    <div class="col-md-12">

                        @foreach($errors->all() as $error)

                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>

                        @endforeach

                        <form method="post" action="/savetask">
                        {{csrf_field()}}
                            <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
                            <br>
                            <input type="submit" class="btn btn-primary" value="SAVE">
                            <a href="/tasks" class="btn btn-warning">Clear</a>
                        </form>
                        <br>
                        
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Task</th>
                            <th>Completed</th>
                            <th>Action</th>

                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->task}}</td>
                                    <td>
                                    @if($task->isCompleted)
                                    <button class="btn btn-success btn-sm">Completed</button>
                                    @else
                                    <button class="btn btn-warning btn-sm">Not Completed</button>
                                    @endif
                                    </td>
                                    <td>

                                    @if(!$task->isCompleted)                                   
                                    <a href="/markascompleted/{{$task->id}}" class="btn btn-primary btn-sm">Mark As Completed</button>
                                        

                                    @else
                                    <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger btn-sm">Mark As Not Completed</button>
                                        

                                    @endif

                                    
                                    <a href="/deletetask/{{$task->id}}" class="btn btn-outline-light btn-sm">Delete</a>

                                    <a href="/updatetask/{{$task->id}}" class="btn btn-outline-success btn-sm">Update</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>