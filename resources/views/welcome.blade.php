<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px 15px;
            text-align: center;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .button {
            display: block;
            width: 100%;
            max-width: 280px;
            margin: 10px auto;
            padding: 15px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .button:hover {
            background-color: #0056b3;
        }

        @media (min-width: 600px) {
            h1 {
                font-size: 36px;
            }

            .button {
                display: inline-block;
                width: auto;
                margin: 10px;
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome to MyApp</h1>
    <a href="{{ route('login') }}" class="button">Login</a>
    <a href="{{ route('register') }}" class="button">Register</a>
</body>
</html>