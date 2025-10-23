<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a New Vendor</h1>
    <form action="{{ route('Bedrijf.store') }}" method="POST">
        @csrf
        <div>
            <label for="bedrijfsnaam">Bedrijfsnaam:</label>
            <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" required>
        </div>
        <div>
            <label for="contactpersoon">Contactpersoon:</label>
            <input type="text" id="contactpersoon" name="contactpersoon" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="text" id="telefoonnummer" name="telefoonnummer" required>
        </div>
        <div>
            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="adres" required>
        </div>
        <div>
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" required>
        </div>
        <div>
            <label for="plaats">Plaats:</label>
            <input type="text" id="plaats" name="plaats" required>
        </div>
        <div>
            <label for="land">Land:</label>
            <input type="text" id="land" name="land" required>
        </div>
        <div>
            <label for="kvk_nummer">KVK Nummer:</label>
            <input type="text" id="kvk_nummer" name="kvk_nummer" required>
        </div>
        <div>
            <label for="btw_nummer">BTW Nummer:</label>
            <input type="text" id="btw_nummer" name="btw_nummer" required>
        </div>
        <div>
            <label for="bankrekening">Bankrekening:</label>
            <input type="text" id="bankrekening" name="bankrekening" required>
        </div>
        <button type="submit">Create Vendor</button>
    </form>
</body>

</html>