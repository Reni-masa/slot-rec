<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>SLOT-REC {{ $title }}</title>

    {{-- css --}}
    <style>
        body {
            padding: 0;
            margin: 0;
        }
    </style>
    {{ $style }}

</head>
<body>
    {{-- メインコンテンツ --}}
    {{ $content }}

    {{-- javascript --}}
    {{ $script ?? "" }}
</body>
</html>
