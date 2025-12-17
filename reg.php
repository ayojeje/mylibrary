
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1388efff, #2575fc);
        }

        .container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .form {
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #444;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(131, 204, 243, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #096e9aff;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #54ade7ff;
        }

        .login-text {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
        }

        .login-text a {
            color: #1171cbff;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>



<div class="container">
    <form class="form" id="reg">
        <h2>Welcome to L.M.S</h2>
        <h2>Create Account</h2>

        <div class="input-group">
            <label>Full Name</label>
            <input type="text"  id="fname" placeholder="Enter your name" required>
        </div>

        <div class="input-group">
            <label>User Name</label>
            <input type="text" id="username" placeholder="Enter your username" required>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email"  id="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" id="pwd"  placeholder="Enter your password" required>
        </div>

    
        <button type="submit">Register</button>

        <p class="login-text">
            Already have an account? <a href="login.php">Login</a>
        </p>
    </form>
</div>



    <script src="reg.js"></script>


</body>
</html>












    




