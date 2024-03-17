<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">

    <img src="{{Vite::asset('resources/images/kiss.jpg') }}" alt="">

    </div>
    @vite('resources/js/app.js')
</body>
</html>
