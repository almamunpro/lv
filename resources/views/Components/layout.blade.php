<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav>
        <x-nav href="/">Home</x-nav>
        <x-nav href="/about">About</x-nav>
        <x-nav href="/contact">Contact</x-nav>
        <a href="/">one for All</a>
    </nav>

    {{$slot}}

</body>
</html>
