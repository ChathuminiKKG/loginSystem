<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #011c2d;
        }

        .container {
            position: relative;
            width: 300px;
            padding: 20px;
            background: #1f293a;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 1.5em;
            color: rgb(51, 155, 165);
            margin-bottom: 10px;
        }

        .input-box {
            position: relative;
            margin: 15px 0;
        }

        input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: 2px solid #3498db;
            outline: none;
            border-radius: 30px;
            font-size: 0.9em;
            color: #fff;
            padding: 0 15px;
            transition: .5s ease;
        }

        input:focus {
            border-color: #0ef;
        }

        label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 0.9em;
            color: #fff;
            pointer-events: none;
            transition: .5s ease;
        }

        input:focus~label {
            top: 1px;
            font-size: 0.7em;
            background: #1f293a;
            padding: 0 4px;
            color: #0ef;
        }

        .btn {
            width: 100%;
            height: 40px;
            background: #3498db;
            border: none;
            outline: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 0.9em;
            color: #1f293a;
            font-weight: 600;
            margin-top: 10px;
        }

        .btn:hover {
            background: #0ef;
            color: #1f293a;
            transition: 0.3s ease-in-out;
        }

        .login-link {
            margin-top: 15px;
        }

        .login-link a {
            font-size: 0.9em;
            color: #0ef;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="#" method="">
            <div class="input-box">
                <input type="text" name="fullname">
                <label for="fullname">Full Name</label>
            </div>
            <div class="input-box">
                <input type="email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-box">
                <input type="password" name="password">
                <label for="password">Password</label>
            </div>
            <div class="input-box">
                <input type="password" name="confirm-password">
                <label for="confirm-password">Confirm Password</label>
            </div>
            <button type="submit" class="btn">Signup</button>
            <div class="login-link">
                <a href="/loginLink">Already have an account? Login</a>
            </div>
        </form>
    </div>
</body>

</html>
