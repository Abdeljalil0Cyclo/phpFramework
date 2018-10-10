<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    
</head>
<body>
    <h1>Welcome to Home Page1</h1>
    @foreach ($posts as $post)
    <p>This is  {{ $post['title'] }}</p>
    @endforeach
</body>
</html>