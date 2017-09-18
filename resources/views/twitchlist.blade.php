<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitchlist</title>
</head>
<body>
@foreach ($channels as $name => $videos)
<h1>{{ $name }}</h1>
<ol>
@foreach ($videos as $video)
    <li>
        <a href="{{ $video->url }}">{{ $video->title }}</a>
        &mdash; <time>{{ gmdate("g:i:s", $video->length) }}</time>
    </li>
@endforeach
</ol>
@endforeach
<footer>By <a href="https://github.com/CoryRay" target="_blank" rel="noopener">Cory Rodriguez</a></footer>
</body>
</html>
