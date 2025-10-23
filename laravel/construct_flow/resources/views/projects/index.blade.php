@foreach($projects as $project)
    <div>
        <strong>{{ $project->project_code }}</strong> - {{ $project->name }}
        <a href="{{ route('projects.show', $project->id) }}">Details</a>
    </div>
@endforeach
<button><a href="{{ route('home') }}">Home</a></button>
<button><a href="{{ route('projects.create') }}">Add Project</a></button>