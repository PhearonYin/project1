<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create New User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="image">Image URL:</label>
        <input type="text" name="image" id="image" required><br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        
        <label for="iduser">Iduser:</label>
        <input type="text" name="iduser" id="iduser" required><br>
        
        <label for="ranks">Ranks:</label>
        <input type="text" name="ranks" id="ranks" required><br>
        
        <label for="position">Position:</label>
        <input type="text" name="position" id="position" required><br>
        
        <button type="submit">Create User</button>
    </form>
</body>
</html>
