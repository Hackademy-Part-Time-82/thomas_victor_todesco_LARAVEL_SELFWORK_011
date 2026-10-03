<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Biblioteca Lumen' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <main>
        {{ $slot }}

    </main>
    <x-footer />
    {{--         <script>

            function showHide(id){
            let id_row = document.querySelectorById('')
            }

        </script> --}}
</body>

</html>
