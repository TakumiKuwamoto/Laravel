<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/todo.css')}}">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
</head>
<body>
    <header>
        <div class="logo">TODO</div>
        <div class="search"><input type="text"></div>
        <div class="create"><a href="{{ route('tasks.create')}}">create</a></div>
    </header>
        <div class="Form">
            <div class="Form-Item">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>image</p>
                    <input type="file" name="image" >
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>title</p>
                    <input type="text" name="title" >
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>content</p>
                    <textarea name="body" id=""  cols="30" rows="10"></textarea>
                </div>
                    <input type="submit" class="Form-Btn" value="送信する">
                </div>
            </div>
        </div>     
    
    
</body>
</html>