<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clean Blue Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e6e9ecff, #a7c8e9ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #ffffff;
            width: 350px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #0d47a1;
        }

        .input-field {
            width: 100%;
            margin: 10px 0;
        }

        .input-field input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #b0bec5;
            outline: none;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            background: #0d47a1;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #1565c0;
        }

        .footer-text {
            margin-top: 15px;
            font-size: 14px;
            color: #37474f;
        }

        .footer-text a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: bold;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome to Library management system</h2>
        <div class="input-field">

            <form id="regSubmit">
            <input type="text"  id="email" placeholder="Enter your email" />
        </div>
         <div class="input-field">
            <input type="password" id="password" placeholder="Enter your password"/>
        </div> 
        <button class="btn">Login</button>
        </form>
        <p class="footer-text">Don't have an account? <a href="reg.php">Register</a></p>
    </div>
    <p id="msg"></p>
</body>

<script src="login.js"></script>
</html>
