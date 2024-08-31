<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="image">Image URL:</label>
        <input type="text" name="image" id="image" value="{{ $user->image }}" required><br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br>
        
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select><br>
        
        <label for="iduser">Iduser:</label>
        <input type="text" name="iduser" id="iduser" value="{{ $user->iduser }}" required><br>
        
        <label for="ranks">Ranks:</label>
        <input type="text" name="ranks" id="ranks" value="{{ $user->ranks }}" required><br>
        
        <label for="position">Position:</label>
        <input type="text" name="position" id="position" value="{{ $user->position }}" required><br>
        
        <button type="submit">Update User</button>
    </form>
</body>
</html>
