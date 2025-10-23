<ul>
    <li>Site code: {{ $site->site_code }}</li>
    <li>Name: {{ $site->name }}</li>
    <li>City: {{ $site->city }}</li>
    <li>Country: {{ $site->country }}</li>
</ul>
<button><a href="{{ route('sites.index') }}">Terug naar sites</a></button>
<button><a href="{{ route('sites.edit', $site->id) }}">Update Site</a></button>
<form action="{{ route('sites.destroy', $site->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Weet je zeker dat je deze site wilt verwijderen?');" type="submit">Verwijder Site</button>
</form>