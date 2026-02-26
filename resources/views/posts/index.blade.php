<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/posts/create">create post</a>
    <h1>All posts</h1>
    @foreach ($posts as $post)
    <h2>{{$post->name}}</h2>
    <p>{{$post->email}}</p>
    <p>{{$post->text}}</p>
    <a href="/posts/{{$post->id}}">show</a>
    <form action="/posts/{{$post->id}}/delete" method>
        @csrf
        @method("delete")
        <input type="submit" value="delete">
</form>
    @endforeach
</body>
</html>