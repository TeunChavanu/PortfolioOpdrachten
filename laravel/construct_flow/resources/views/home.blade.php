<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <h1>Welcome to the Home Page</h1>
    <p>This is a simple Laravel Blade template.</p>

    <nav>
        <ul>
            <li><a href="{{ route('projects.index') }}">Projects</a></li>
            <li><a href="{{ route('sites.index') }}">Sites</a></li>
        </ul>
    </nav>
</body>

</html>