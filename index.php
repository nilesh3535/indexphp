<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50-50 Layout</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="1.jpg" style="width:100%;height:100%" alt="Image Description">
        </div>
        <div class="right-section">
            <form>
                <h2>Employee Login</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
                <a href="" id="adminlogin">  Admin-Login</a>
            </form>
        </div>
    </div>
    <div class="container" style="display:none">
        <div class="left-section" style="display:none" >
        <form>
                <h2>Admin Login</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
</br>
                New Register ?<a href="./adminregister.php" id="adminlogin"> Click here </a>
            </form>
           
        </div>
        <div class="right-section" style="display:none">
        <img src="1.jpg" style="width:100%;height:100%" alt="Image Description">
        </div>
    </div>
</body>
</html>
