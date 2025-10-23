<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-100 min-h-screen">
    <nav class="bg-red-600 p-4">
        <ul class="flex space-x-4">
            <li><a href="/" class="text-white font-bold hover:underline">Showroom</a></li>
            <li><a href="/contact" class="text-white font-bold hover:underline">Contact</a></li>
        </ul>
    </nav>
    <div class="max-w-7xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-2">Showroom</h1>
        <p class="mb-6">Welcome to the showroom!</p>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($data->showroom as $car)
            <div href="/contact" class="bg-white rounded-lg p-4 no-underline sm:hidden md:hidden lg:inline-block justify-items-center text-center">
                @if(isset($car['brand']))
                <div class="font-semibold text-lg mb-1">{{ $car['brand'] }} {{ $car['model'] ?? '' }}</div>
                <img src="{{ $car['image'] }}" class="max-w-full h-32 object-contain rounded">
                <div class="mb-2 text-blue-700 font-bold">
                    €{{ isset($car['price']) ? number_format($car['price'], 0, ',', '.') : 'n.v.t.' }}
                    <button onclick="window.location.href='/contact'" class="ml-2 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition-colors">Bekijk details</button>
                </div>
                @endif
            </div>
            @endforeach
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($data->showroom as $car)
            <a href="/contact" class="bg-white rounded-lg shadow p-4 flex flex-col justify-items-center text-center transition-transform hover:scale-105 hover:shadow-xl cursor-pointer text-inherit no-underline sm:inline-block md:inline-block lg:hidden">
                @if(isset($car['brand']))
                <div class="font-semibold text-lg mb-1">{{ $car['brand'] }} {{ $car['model'] ?? '' }}</div>
                <img src="{{ $car['image'] }}" class="max-w-full h-32 object-contain rounded">
                <div class="mb-2 text-blue-700 font-bold">
                    €{{ isset($car['price']) ? number_format($car['price'], 0, ',', '.') : 'n.v.t.' }}
                </div>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</body>