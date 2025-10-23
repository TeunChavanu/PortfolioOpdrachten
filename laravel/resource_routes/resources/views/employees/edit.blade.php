<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>

    <a href="{{ route('employees.index') }}">Back to Employee List</a>
    <br><br>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ $employee->first_name }}" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ $employee->last_name }}" required>
        <br>
        <button type="submit">Update Employee</button>
    </form>
</body>
</html>