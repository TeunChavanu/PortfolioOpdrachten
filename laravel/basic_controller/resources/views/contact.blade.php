<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-blue-500 text-white p-4">
        <div class="flex flex-col gap-8 justify-center align-center mr-16 md:flex-row">
            <a class="hover:underline" href="/">Home</a>
            <a class="hover:underline" href="/contact">Contact</a>
            <a class="hover:underline" href="/about_us">Over ons</a>
            <a class="hover:underline" href="/our_team">Ons team</a>
        </div>
    </header>
    <div class="flex m-40 flex-col md:flex-row md:justify-center gap-6">
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Adres</h2>
            <p>Hoofdstraat 123</p>
            <p>1234 AB Amsterdam</p>
            <p>Nederland</p>
        </div>
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Telefoon & Email</h2>
            <p>Tel: 020-1234567</p>
            <p>Email: info@bedrijf.nl</p>
        </div>
    </div>
</body>

</html>