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
        <div class="flex flex-row gap-8 justify-center align-center mr-16">
            <a class="hover:underline" href="/">Home</a>
            <a class="hover:underline" href="/contact">Contact</a>
            <a class="hover:underline" href="/about_us">Over ons</a>
            <a class="hover:underline" href="/our_team">Ons team</a>
        </div>
    </header>
    <div class="flex m-40 flex-col md:flex-row md:justify-center gap-6">
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Visie</h2>
            <p>Ons bedrijf streeft ernaar om de meest betrouwbare
                en innovatieve partner te zijn in onze branche.<br>
                Wij geloven in een toekomst waarin technologie en mens centraal staan,
                en waarin duurzaamheid en maatschappelijke verantwoordelijkheid de
                standaard zijn.</p>
        </div>
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Missie</h2>
            <p>Onze missie is om waarde te creëren voor onze klanten door middel van
                innovatieve oplossingen en uitstekende service.<br> Wij streven ernaar om
                de verwachtingen van onze klanten te overtreffen en langdurige
                relaties op te bouwen.</p>
        </div>
    </div>
</body>

</html>