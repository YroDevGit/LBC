<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifyer</title>
</head>
<body>
    <div align="center">
        <div>
            <h2 style="color:white;">{{$subject}}</h2>
        </div>
        <div style="background-color:black;">
            <span style="color: white;">Hi, You have been invited to the event.</span>
    
        </div>
        <div style="background-color:black;">
            <span style="color: white;">{{$subject}} will be held on {{$text}} at {{session('address')}}</span>
    
        </div>
    </div>
</body>
</html>