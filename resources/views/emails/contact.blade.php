<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    There is new message from {{$data['name']}} as bellow :
    <br>
    Email : {{$data['email']}}
    <br>
    Subject : {{$data['subject']}}
    <br>
    Message : {{$data['message']}}
</body>

</html>