<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learnerce Driving School</title>

    <!-- 1. This injects the missing preamble Vite is looking for -->
    @viteReactRefresh

    <!-- 2. Your existing asset loader -->
    @vite(['resources/js/app.jsx'])
    @inertiaHead
</head>

<body class="antialiased">
    @inertia
</body>

</html>