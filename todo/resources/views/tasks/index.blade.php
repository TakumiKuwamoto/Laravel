<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="todo.css">
    <style>
            /* http://meyerweb.com/eric/tools/css/reset/ 
            v2.0 | 20110126
            License: none (public domain)
            */

            html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed, 
            figure, figcaption, footer, header, hgroup, 
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure, 
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }


            header{
                height: 100px;
                background-color: rgb(55, 55, 66);
             }
             .logo{
                height: 100px;
                float: left;
                line-height: 100px;
                padding: 0 50px;
                
             }
             .create{
                float: right;
                height: 100px;
                line-height: 100px;
             }
             .search{
                float: left;
                line-height: 100px;
             }
             .button{
                float: left;
             }
            .container{
                width: 80vw;
                margin: 0 auto;

            }
            .task{
                width: 24%;
                height: 400px;
                display: inline-block;
                background-color: black;
                margin-top: 50px;

            }
            .picture{
                width: 100%;
                height: 40%;
                background-color: pink;
            }
            .title{
                height: 10%;
                width: 100%;
                background-color:aqua
            }
            .content{
                width: 100%;
                height: 50%;
                background-color: white;
            }
            .task a{
                height: 100%;
                width: 100%;
                display: block;
                background-color: aquamarine;
            }
            .button{
                float: right;
            }
            
    </style>
</head>
<body>
    <header>
        <div class="logo">TODO</div>
        <div class="search"><input type="text"></div>
        <div class="create"><a href="{{ route('tasks.create')}}">create</a></div>
    </header>
    <div class="main">
        <div class="container">
                <div class="task">
                    @foreach($tasks as $task)
                    <div class="picture">
                        {{$task->image_at}}
                    </div>
                    
                    <div class="title">タイトル: {{$task->title}}</div>
                    <div class="content">内容: {{$task->contents}}</div>
                    <form action="{{route('tasks.destroy',$task->id)}}" method="post"> <!-- getはページ遷移だけｄ-->
                    @csrf
                    @method('delete')
                        <input type="submit" value="削除">
                    </form>
                   
                    <div class="button"><a href="{{route('tasks.edit',$task->id)}}">edit</a></div>
                    <div class="button"><a href="">いいね</a></div>
                    @endforeach
                </div>
                
                
                
                
           
            
           
            
           
        </div>
    </div>
</body>

</html>
