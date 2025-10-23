<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bedrijven</h1>
    <a href="{{ route('Bedrijf.create') }}">Nieuw Bedrijf</a>
    <ul>
        @foreach ($bedrijven as $bedrijf)
            <li>{{ $bedrijf->bedrijfsnaam }} - {{ $bedrijf->adres }}</li>
        @endforeach
    </ul>
</body>
</html>