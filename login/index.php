<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px ;
            
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            if ($username != '' && $password !== '') {
                echo "<p style='color: green; text-align: center;'>Login successful! Welcome, $username.</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Invalid username or password.</p>";
            }
        }
        ?>
    


    <div class="login-container" >
        <h2 id = "heading">Login</h2>
        <form class="login-form" action="" method="post">
            <div class="form-group" id ="helll" >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="password" id="password" name="password" required>
                
            </div>
            
            <input type="checkbox" name="" id="showPass" onclick="check()">
            <label for="showPass" id="sPass" >Show Password</label> <br>
            <div style="margin-top: 8px;">
                
                <small id="error"></small>

            </div>
            <small id="signUp"><span>Don't have an Account?</span> <a href="#" onclick="signUp()">SignUp</a></small> 
            
            <div class="form-group" style="margin-top: 10px;">
                <button type="button" onclick="submited()" id="submit">Login</button>
            </div>
        </form>
    </div>
</body>
<script src="script.js"></script>
</html>
