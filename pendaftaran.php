<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Registrasi</h2>
        <form action="register.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div> 
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="password">Role</label>
                <select name="role" id="role">
                    <option value="user">user</option>
                    <option value="Admin">Admin</option>
                </select>
                <!-- <input type="password" id="role" name="role" required> -->
            </div>
            <button type="submit">Daftar</button>
        </form>
        
    </div>
</body>
</html>