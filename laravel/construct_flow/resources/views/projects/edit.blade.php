<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>

<body>
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="project_code">Project Code:</label>
        <input type="text" id="project_code" name="project_code" value="{{ $project->project_code }}"><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $project->name }}"><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="planned" {{ $project->status == 'planned' ? 'selected' : '' }}>Planned</option>
            <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="on_hold" {{ $project->status == 'on_hold' ? 'selected' : '' }}>On hold</option>
            <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ $project->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select><br><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="{{ $project->start_date }}"><br><br>

         <button><a href="{{ route('projects.show', $project->id) }}">Terug naar projecten</a></button>
        <input type="submit" value="Update Project">
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