<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit post with id: {{$post->id}}</h1>
    <form method="post" action="/posts/{{$post->id}}/update">
        @csrf
        @method("PUT")
        <label for="name" >name</label><br>
        <input type="text" name="name"><br>

        <label for="email" >email</label><br>
        <input type="email" name="email"><br>

        <label for="text" >text</label><br>
        <input type="text" name="text"><br>

        <input type="submit" value="edit"><br>
    </form>

    <a href="/posts">cancele</a>
</body>
</html>