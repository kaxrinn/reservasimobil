<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
</head>
<body>

    {{-- Komponen menu navigasi --}}
    @include('components.menu')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
