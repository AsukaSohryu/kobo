<!DOCTYPE html>
<html lang="en">
<head>
    <title>お誕生日おめでとうございます Kobo Kanaeru ‼</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{url('/')}}/assets/img/koboIcon.jpg" />
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/bootstrap.min.css" type="text/css" />
</head>

<style>
    .bg-body-tertiary {
        --bs-bg-opacity: 0;
        background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
    }
</style>

<body style='background-image: url("./assets/img/cloud.jpg"); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;'>
    
    @include('layout.navbar')

    @yield('content')

    <script src="{{url('/')}}/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>