<!DOCTYPE html>
<html lang="en">
<head>
    <title>お誕生日おめでとうございます Kobo Kanaeru ‼</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{url('/')}}/assets/img/koboIcon.jpg" />
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>

<style>
    .bg-body-tertiary {
        --bs-bg-opacity: 0;
        background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
    }
    .caveat-brush-regular {
        font-family: "Caveat Brush", cursive;
        font-weight: 400;
        font-style: normal;
    }
</style>

<body style='background-image: url("./assets/img/coms/bg-white-blue.PNG"); background-size: cover; background-repeat: repeat-y; background-position: center; height: 100vh;'>
    
    {{-- @include('layout.navbar') --}}

    @yield('content')

    <script src="{{url('/')}}/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>