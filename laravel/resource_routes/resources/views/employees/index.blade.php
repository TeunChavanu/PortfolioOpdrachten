<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h1>Employees List</h1>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('employees.create') }}">Create New Employee</a>
    <ul>
        @foreach($employees as $employee)
        <li>{{ $employee->first_name }} {{ $employee->last_name }} <a href="{{ route('employees.edit', $employee->id) }}">Edit</a> | <a href="{{ route('employees.destroy', $employee->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $employee->id }}').submit();">Delete</a>
            <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            @endforeach
    </ul>
</body>

</html>