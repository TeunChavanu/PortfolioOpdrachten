@foreach($sites as $site)
    <div>
        <strong>{{ $site->site_code }}</strong> - {{ $site->name }}
        <a href="{{ route('sites.show', $site->id) }}">Details</a>
    </div>
@endforeach
<button><a href="{{ route('home') }}">Home</a></button>
<button><a href="{{ route('sites.create') }}">Add Site</a></button>