<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Post</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>

<body>
    <h1>Daftar Post</h1>
    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['content'] }}</p>
    @endforeach
</body>

</html>
