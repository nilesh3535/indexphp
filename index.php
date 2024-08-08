<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Forms</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            width: 80%;
            height: 80%;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }
        .column {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 50%;
            padding: 20px;
            box-sizing: border-box;
        }
        .column img {
            max-width: 100%;
            max-height: 50%;
        }
        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
        .login-form input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
        }
        .login-form button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="column left-column">
            <img src="employee-image.jpg" alt="Employee Image" id="leftImage">
            <form class="login-form" id="adminForm" style="display: none;">
                <h2>Admin Login</h2>
                <input type="text" placeholder="Admin Username">
                <input type="password" placeholder="Admin Password">
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="column right-column">
            <form class="login-form" id="employeeForm">
                <h2>Employee Login</h2>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
            <img src="admin-image.jpg" alt="Admin Image" id="rightImage" style="display: none;">
        </div>
    </div>
    <button id="adminButton">Admin Login</button>

    <script>
        document.getElementById('adminButton').addEventListener('click', function() {
            // Hide the employee image and form
            document.getElementById('leftImage').style.display = 'none';
            document.getElementById('employeeForm').style.display = 'none';

            // Show the admin form and right side image
            document.getElementById('adminForm').style.display = 'block';
            document.getElementById('rightImage').style.display = 'block';
        });
    </script>
</body>
</html>
