@props(['title' => 'Home', 'narrow' => false])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Training Institute</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <x-navbar />

    <main class="page-main">
        <div class="{{ $narrow ? 'container-narrow' : 'container' }}">
            {{ $slot }}
        </div>
    </main>

    <x-footer />
</body>
</html>