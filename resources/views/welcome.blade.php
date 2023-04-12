<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <h1 class="mb-3 mt-3">Treni in partenza oggi</h1>
        <ul class="list-group">
            @forelse ($trains as $train)

                <li class="list-group-item">
                    <div>{{ $train->company }}</div>
                    <div>Da: {{ $train->departure_station }}</div>
                    <div>A: {{ $train->destination_station }}</div>
                    <div>{{ $train->train_code }}</div>
                    <div>{{ $train->departure_time }}</div>
                    <div>{{ $train->arrival_time }}</div>
                </li>


            @empty


            @endforelse
        </ul>
    </div>

</body>

</html>