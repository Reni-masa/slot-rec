<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SLOT-REC</title>
</head>
<body>
    <h1>スロレク</h1>

    <ul>
    @foreach ($slotInfos as $slotInfo)
        <li><a href="">{{$slotInfo->slot_name}}</a></li>
    @endforeach
    </ul>

</body>
</html>
