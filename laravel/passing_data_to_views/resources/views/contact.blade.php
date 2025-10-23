<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-100 min-h-screen">
    <nav class="bg-red-600 p-4">
        <ul class="flex space-x-4">
            <li><a href="/" class="text-white font-bold hover:underline">Showroom</a></li>
            <li><a href="/contact" class="text-white font-bold hover:underline">Contact</a></li>
        </ul>
    </nav>
    <div class="flex items-center justify-center min-h-[70vh]">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
            <h1 class="text-3xl font-bold mb-6 text-center text-blue-800">Contact</h1>
            <div class="space-y-3 text-lg text-gray-700">
                <div>
                    <span class="font-semibold">Bedrijf:</span>
                    {{ $data->company->name }}
                </div>
                <div>
                    <span class="font-semibold">Adres:</span>
                    {{ $data->company->address }}
                </div>
                <div>
                    <span class="font-semibold">Telefoon:</span>
                    {{ $data->company->phone }}
                </div>
                <div>
                    <span class="font-semibold">E-mail:</span>
                    <a href="mailto:{{ $data->company->email }}" class="text-blue-600 hover:underline">
                        {{ $data->company->email }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>