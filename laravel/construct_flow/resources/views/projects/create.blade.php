<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
</head>

<body>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="project_code">Project Code:</label>
        <input type="text" id="project_code" name="project_code"><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="planned">Planned</option>
            <option value="active">Active</option>
            <option value="on_hold">On hold</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
        </select><br><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date"><br><br>

        <button><a href="{{ route('projects.index') }}">Terug naar projecten</a></button>
        <input type="submit" value="Create Project">
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