<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="grid grid-auto-rows">
    <div id="Picture" class="row-start-1 flex flex-row items-center justify-center gap-4">
        <img src="/Images/rijksoverheid_logo.svg" alt="Rijksoverheid logo" class="justify-self-center" />
        <a class="text-[#154273] font-bold">Rijksoverheid</a>
    </div>

    <div id="Header" class="row-start-2 bg-[#154273] text-white p-4 h-17 text-xl content-center">
        <ul class="flex flex-row grid grid-cols-2">

            <div class="grid-start-1 flex flex-row justify-center mr-80">
                <li><a class="hover:underline" href="#">Home</a></li>
            </div>

            <div class="grid-start-2 flex flex-row justify-center gap-6">
                <li><a class="hover:underline" href="#">Actueel</a></li>
                <li><a class="hover:underline" href="#">Onderwerpen</a></li>
                <li><a class="hover:underline" href="#">Ministeries</a></li>
                <li><a class="hover:underline" href="#">Regering</a></li>
                <li><a class="hover:underline" href="#">Documenten</a></li>
            </div>
        </ul>
    </div>
    <div id="Content" class="row-start-3">
        <img class="relative justify-self-center w-full h-auto z--10" src="/Images/checklist-schijnzelfstandigheid-header.jpg" alt="Checklist afbeelding" />

        <div class="absolute top-1/3 left-1/10 bg-white w-100 h-72 p-6">
            <h1 class="text-2xl">Veel bekeken</h1>
            <br>
            <ul class="text-[#154273] text-lg">
                <li><a class="hover:underline" href="#">&#129154; Het juiste contract: zzp ja of nee?</a></li>
                <li><a class="hover:underline" href="#">&#129154; Overzicht schoolvakanties 2025-2026</a></li>
                <li><a class="hover:underline" href="#">&#129154; Wat is de WOZ-waarde van mijn huis?</a></li>
                <li><a class="hover:underline" href="#">&#129154; Eisen aan de pasfoto voor paspoort of ID-kaart</a></li>
                <li><a class="hover:underline" href="#">&#129154; Nieuwe vaccinatieronde corona</a></li>
            </ul>
        </div>

        <input type="text" placeholder="Zoeken..." class="absolute top-1/3 right-1/8 bg-white w-90 h-10 p-6 border-black border-1">
        <button class="absolute top-1/3 right-1/10 bg-white text-white w-12.5 h-12.5 border-black border-1 hover:bg-black text-2xl">🔍</button>

        </input>
    </div>
</body>

</html>