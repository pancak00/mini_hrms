<!DOCTYPE html>
<html>
<head>
    <title>HRMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app"></div>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">HRMS</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
