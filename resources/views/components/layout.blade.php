<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SLOT-REC {{ $title }}</title>
    {{-- css --}}
    {{ $style }}
</head>
<body>
    {{-- メインコンテンツ --}}
    {{ $content }}

    {{-- javascript --}}
    {{ $script ?? "" }}
</body>
</html>
