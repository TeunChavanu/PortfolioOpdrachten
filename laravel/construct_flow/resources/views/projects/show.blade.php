<ul>
    <li>Project code: {{ $project->project_code }}</li>
    <li>Naam: {{ $project->name }}</li>
    <li>Status: {{ $project->status }}</li>
    <li>Startdatum: {{ $project->start_date }}</li>
</ul>
<button><a href="{{ route('projects.index') }}">Terug naar projecten</a></button>
<button><a href="{{ route('projects.edit', $project->id) }}">Update Project</a></button>
<form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Weet je zeker dat je dit project wilt verwijderen?');" type="submit">Verwijder Project</button>
</form>