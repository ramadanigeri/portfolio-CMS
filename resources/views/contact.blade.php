<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Contact Page</title>
</head>
<body>
    <h1>This is Contact Page</h1>
    {{-- Use nameroute --}}
    <a href="{{route('about.page')}}">About Page</a>
    {{-- User url route --}}
    {{-- <a href="{{url('/about')}}">About Page</a> --}}
    {{-- Difference between name route is that when you change the url on the web.php in the case of nameroute
    you dont need to update the url on the contact.blade.php since every change on the url will be saved
    on the nameroute we specified, but if we use url we need to add the exact url 
    to be redirected to that url --}}
</body>
</html>