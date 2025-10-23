<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="{{ route('sites.update', $site->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="site_code">Site Code:</label>
        <input type="text" id="site_code" name="site_code" value="{{ $site->site_code }}"><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $site->name }}"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $site->city }}"><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{ $site->country }}"><br><br>

        <button><a href="{{ route('sites.show', $site->id) }}">Terug naar sites</a></button>
        <input type="submit" value="Update Site">
    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>