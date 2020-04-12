<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empty seats count</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Count pay tickets
        </div>
        <form action="{{route('generate')}}" method="post">
            {{csrf_field()}}
            <div style="text-align: left; display: inline-block">
                <b style="">{{$a = 'A'}}</b><br>
                @foreach($array as $key =>$col)
                    <div>
                        @foreach($col as $row_key => $row)
                            <input name="stops[{{$key}}][{{$row_key}}]" type="number" max="{{$row}}" style="width: 50px; height: 26px; margin: 6px">
                        @endforeach
                        <b style="">{{++$a}}</b><br>
                    </div>
                @endforeach
            </div>

            <div style="text-align: left; display: inline-block">
                <b style="">{{$a = 'A'}}</b><br>
                @foreach($array as $key =>$col)
                    <div>
                        @foreach($col as $row_key => $row)
                            <input name="stops[{{$key}}][{{$row_key}}]" value="{{$row}}" type="number" disabled style="width: 50px; height: 26px; margin: 6px">
                        @endforeach
                        <b style="">{{++$a}}</b><br>
                    </div>
                @endforeach
            </div>
            <br><br>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
</body>
</html>
