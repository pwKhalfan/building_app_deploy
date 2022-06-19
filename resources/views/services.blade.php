<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- If user is loggedIn --}}
    @if ( Auth::check() )
        Your name is: {{ Auth::user()->name }}
        <br>
        Your Email is: {{ Auth::user()->email }}
    
    @else
        You are not logged in
    @endif
</body>
</html>