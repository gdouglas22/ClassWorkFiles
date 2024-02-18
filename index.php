<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Градиент</title>
    <style>
        body{
            margin:0;
            padding: 90px 50px 30px;
            background-color:  #d4def2;
        }
        .bubble{
            box-sizing: border-box;
            width: 350px;
            height: 245px;
            background-image: url('https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/09/26/speech_bubble.png');
            background-position: center center;
            background-size: contain;
            position: absolute;
            text-align: center;
            top: 0;
            left: 90px;
            padding: 30px 40px 60px;
            overflow: hidden;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/09/26/hello.gif">
    <div class="bubble">
        Привет, {ИМЯ} !!!
    </div>
</body>
</html>
