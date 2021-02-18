<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>create</title>
    </head>
    <body>
        <h1>Write a New Post</h1>
        <form action="{{ route('posts.store')}}" method="post">
            @csrf
            <input type="text" placeholder="Write here the title of your post">
            <input type="text" placeholder="Write here the body of your post">
            <button type="submit">Publish</button>
        </form>
    </body>
</html>