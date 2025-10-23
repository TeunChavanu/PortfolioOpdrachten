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
        <div class="flex gap-8 justify-center align-center mr-16 flex-col md:flex-row">
            <a class="hover:underline" href="/">Home</a>
            <a class="hover:underline" href="/contact">Contact</a>
            <a class="hover:underline" href="/about_us">Over ons</a>
            <a class="hover:underline" href="/our_team">Ons team</a>
        </div>
    </header>
    <div class="flex m-40 flex-col md:flex-row md:justify-center gap-6 flex-col">
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Jan de Vries </h2>
            <p>Directeur</p>
            <p>Jan geeft leiding aan het bedrijf en zorgt voor een inspirerende werkomgeving.</p>
        </div>
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Sara Jansen </h2>
            <p>Marketing Manager</p>
            <p>Sara is verantwoordelijk voor de marketingstrategieën en het vergroten van de naamsbekendheid.</p>
        </div>
        <div class="bg-gray-100 shadow-lg rounded-xl p-6 flex-1">
            <h2 class="text-xl font-semibold mb-2">Ali Özdemir </h2>
            <p>Softwareontwikkelaar</p>
            <p>Ali ontwikkelt innovatieve oplossingen en houdt zich bezig met de nieuwste technologieën.</p>
        </div>
    </div>
</body>

</html>