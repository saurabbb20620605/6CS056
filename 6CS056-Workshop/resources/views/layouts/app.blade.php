<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Training Institute')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <a href="/students" class="brand">
                <span class="brand-badge">TI</span>
                <span>Institute Portal</span>
            </a>
            <div class="nav-links">
                <a href="/students" class="nav-link {{ request()->is('students*') ? 'active' : '' }}">Students</a>
                <a href="/courses" class="nav-link {{ request()->is('courses*') ? 'active' : '' }}">Courses</a>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>