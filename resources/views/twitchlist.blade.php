<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitchlist</title>
    <style>
        .thumbnail {
            width: 2rem;
        }
    </style>
</head>
<body>
@foreach ($channels as $name => $videos)
<h1>{{ $name }}</h1>
<ol>
@foreach ($videos as $video)
    <li>
        <a href="{{ $video->url }}">
        <img src="{{ $video->thumbnails[0]->url }}" class="thumbnail" alt="Thumb">
        {{ $video->title }}
        </a>
    </li>
@endforeach
</ol>
@endforeach
<footer>By <a href="https://github.com/CoryRay" target="_blank" rel="noopener">Cory Rodriguez</a></footer>

</body>
</html>
