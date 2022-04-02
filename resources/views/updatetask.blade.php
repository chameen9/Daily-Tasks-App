<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <title>Update Task</title>
        <meta name="viewpoint" content="widht=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <br>
            <form action="/updatetasktext" method="post">
            {{csrf_field()}}
                <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
                <br>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                <input type="submit" class="btn btn-warning" value="Update"/>
                &nbsp;&nbsp; <a href="/tasks" class="btn btn-danger">Cancel</a>

            </form>
        </div>
    </body>