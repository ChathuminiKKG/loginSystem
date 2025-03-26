<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container span {
            position: absolute;
            left: 0;
            width: 20px;
            height: 4px;
            background-color: #3498db;
            border-radius: 8px;
            transform-origin: 100px;
            transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
            animation: blink 3s linear infinite;
            animation-delay: calc(var(--i) * (3s / 50));
        }

        @keyframes blink {
            0% {
                background-color: #0ef;
            }

            25% {
                background-color: #2c4766;
            }
        }

        .login-box {
            position: absolute;
            width: 400px;
        }

        form {
            width: 100%;
            padding: 0 30px;
        }

        h2 {
            font-size: 1.5em;
            color: rgb(51, 155, 165);
            text-align: center;
            margin-top: 10px;
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

        .forgot-password {
            margin: -10px 0 5px;
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            font-size: 0.9em;
            color: #0ef;
            text-decoration: none;
        }

        .forgot-password a:hover {
            color: #fff;
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


        .signup-link {
            margin: 15px 0 5px;
            text-align: center;
            margin-top: 10px;
        }

        .signup-link a {
            font-size: 0.9em;
            color: #0ef;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="#" method="">
                <div class="input-box">
                    <input type="email" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password">
                    <label for="password">Password</label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="signup-link">
                    <a href="/signupLink">Signup now</a>
                </div>
            </form>
        </div>
        <span style="--i:0"></span>
        <span style="--i:1"></span>
        <span style="--i:2"></span>
        <span style="--i:3"></span>
        <span style="--i:4"></span>
        <span style="--i:5"></span>
        <span style="--i:6"></span>
        <span style="--i:7"></span>
        <span style="--i:8"></span>
        <span style="--i:9"></span>
        <span style="--i:10"></span>
        <span style="--i:11"></span>
        <span style="--i:12"></span>
        <span style="--i:13"></span>
        <span style="--i:14"></span>
        <span style="--i:15"></span>
        <span style="--i:16"></span>
        <span style="--i:17"></span>
        <span style="--i:18"></span>
        <span style="--i:19"></span>
        <span style="--i:20"></span>
        <span style="--i:21"></span>
        <span style="--i:22"></span>
        <span style="--i:23"></span>
        <span style="--i:24"></span>
        <span style="--i:25"></span>
        <span style="--i:26"></span>
        <span style="--i:27"></span>
        <span style="--i:28"></span>
        <span style="--i:29"></span>
        <span style="--i:30"></span>
        <span style="--i:31"></span>
        <span style="--i:32"></span>
        <span style="--i:33"></span>
        <span style="--i:34"></span>
        <span style="--i:35"></span>
        <span style="--i:36"></span>
        <span style="--i:37"></span>
        <span style="--i:38"></span>
        <span style="--i:39"></span>
        <span style="--i:40"></span>
        <span style="--i:41"></span>
        <span style="--i:42"></span>
        <span style="--i:43"></span>
        <span style="--i:44"></span>
        <span style="--i:45"></span>
        <span style="--i:46"></span>
        <span style="--i:47"></span>
        <span style="--i:48"></span>
        <span style="--i:49"></span>

    </div>
</body>

</html>
