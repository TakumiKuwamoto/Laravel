<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/todo.css')}}">
</head>
<body>
    <header>
        <div class="logo">TODO</div>
        <div class="search"><input type="text"></div>
        <div class="create"><a href="{{ route('tasks.create')}}">create</a></div>
    </header>
    <div class="main">
        <div class="container">
            <div class="tasks">
                @foreach($tasks as $task)
                <div class="task">
               
                    <div class="picture">
                        {{$task->image_at}}
                    </div>
                    <div class="title">タイトル: {{$task->title}}</div>
                    <div class="content">内容: {{$task->contents}}</div>
                    <form action="{{route('tasks.destroy',$task->id)}}" method="post">
                    @csrf
                    @method('delete')
                        <div class="button"><input type="submit" value="delete"></a></div>
                    </form>
                    <form action="{{route('tasks.edit',$task->id)}}">
                        <div class="button"><input type="submit" value="edit"></div>
                    </form>
                    
                    
                
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

 

</html>