<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="タイトルを入力してください">
        <input type="file" name="image">
        <textarea name="body" id="" placeholder="内容" cols="30" rows="10"></textarea>
        <button type="submit" >登録</button>
    </form>
    
    
</body>
</html>