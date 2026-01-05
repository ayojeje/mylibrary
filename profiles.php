<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f8eff6ff, #3d98f4ff);
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
            color: #e9edf4ff;
            background-color:red;
            padding:10px;
             border-radius: 12px;
        }

        h3 {
            color: #070a97ff;
        }

         .input-field {
            width: 100%;
            margin: 10px 0;
        } 

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            background: #0d8ba1ff;
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
        <h2>User Profile</h2>
        <hr>
        <div class="input-field">
         <h3> Name: <?php echo $_SESSION["fullname"]; ?> </h3>
            <hr>
        <h3> Username: <?php echo $_SESSION["username"]; ?> </h3>
        <hr>
        <h3>Email: <?php echo $_SESSION["email"]; ?> </h3>
        <hr>
       
        <button class="btn">Edit profile</button>
        <button class="btn"><a href="dashboard.php">dashboard</a></button>
        

    </div>
    
</body>
</html>
