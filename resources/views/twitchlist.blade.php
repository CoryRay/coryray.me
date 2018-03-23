<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitchlist</title>
    <style>
        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        body {
            background: #eee;
            font-size: 16px;
            font-family:
                -apple-system, system-ui, BlinkMacSystemFont, "Ubuntu",
                "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }
        code {
            font-family: monospace, monospace;
            padding: .2rem .4rem;
            font-size: 90%;
            color: #bd4147;
            background-color: #f8f9fa;
            border-radius: .25rem;
        }
        ol {
            padding-left: 1.5rem;
        }
        li {
            list-style: none;
        }
        li::before {
            font-family: monospace, monospace;
            content: attr(data-recorded-at) " - ";
        }
    </style>
</head>
<body>
<h1>Twitchlist</h1>
<p>
    Show the latest VODs from Twitch channels!
    Add <code>?channels=yourFavChannel</code> to the end of the address bar.
    See multiple channel feeds by separating them with a comma.
    Also, add <code>&limit=numberHere</code> to the address bar to change how many videos appear.
</p>
@forelse ($channels as $name => $videos)
    <h2>{{ head($videos)->channel->display_name }}</h2>
    <ol>
        @foreach ($videos as $video)
            <li data-recorded-at="{{ Carbon\Carbon::parse($video->recorded_at)->format('M d') }}">
                <a href="{{ $video->url }}">{{ $video->title }}</a>
                &mdash; <time>{{ gmdate("H:i:s", $video->length) }}</time>
            </li>
        @endforeach
    </ol>
@empty
@endforelse
<footer>By <a href="https://github.com/CoryRay" target="_blank" rel="noopener">Cory Rodriguez</a></footer>
</body>
</html>
