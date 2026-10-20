<!-- resources/views/layout/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel 12</title>
    <!-- Tambahkan CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    @include('layout.navbar')

    <div class="container mt-3 flex-grow-1">
        @yield('content')
    </div>

    @include('layout.footer')

</body>
</html>