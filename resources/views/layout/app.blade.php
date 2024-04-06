<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body, input, button, select, textarea {
            font-family: Arial;
            font-size: 14px; 
        }

    </style>
    @yield('styles')
</head>
<body>

    <div>@yield('content')</div>

</body>
</html>