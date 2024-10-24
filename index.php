<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- style css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #7FDBFF;
        }

        .login-container {
            background-color:  #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .judul {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-form input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
        }

        .login-form button {
            padding: 10px;
            background-color: blue;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color:  #000080 ;
        }
    </style>
    <!-- style css -->
</head>
<body>
    <div class="login-container">
        <h1 class="judul">Login</h1>
        <form action="./backend/login.php" method="POST" class="login-form">
            <input type="email" name="email" id="email" placeholder="Email" required/>
            <input type="password" name="password" id="password" placeholder="Password" required/>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
