<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        .form-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        form {
            padding-right: 60px;
            padding-left: 60px;
            border-radius: 8px;
            width: 100%;
        }

        label {
            font-size: 40px;
            display: block;
            margin-top: 15px;
            margin-bottom: 10px;
            font-weight: light;
        }

        input[type="email"],
        input[type="password"] {
            border: 4px solid #ffc95d;
            border-radius: 30px;
            width: 100%;
            padding: 12px 30px;
            box-sizing: border-box;
            margin-bottom: 40px;
            font-size: 30px;
            height: 100px;
        }

        .bottom-buttons {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #e0e8f0;
            padding: 15px 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        button,
        .button {
            width: 100%;
            padding: 12px;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button {
            background-color: #ffc95d;
            color: white;
            border: none;
            border-radius: 70px;
            padding: 40px 40px;
            font-size: 48px;
            font-weight: light;
            cursor: pointer;
            width: 80%;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto;
            margin-bottom: 60px;
        }

        button:hover {
            background-color: #d4ac0d;
        }

        .button {
            background-color: #f0f0f0;
            color: #007bff;
            text-decoration: none;
        }

        .button:hover {
            background-color: #d0d0d0;
        }

        div[style*="color: red;"] {
            margin-bottom: 10px;
        }

        .back-image-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: block;
            z-index: 1000;
        }

        .back-image-link img {
            width: 150px;
            height: auto;
            display: block;
            cursor: pointer;
        }

        @media (min-width: 1000px) {
            .back-image-link {
                display: none;
            }
        }

        .signup-text {
            margin-bottom: 200px;
            text-align: center;
            font-size: 30px;
            color: rgb(0, 0, 0);
        }

        .signup-text a {
            color: #ffc95d;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .signup-text a:hover {
            text-decoration: underline;
        }

        .form-image {
            display: block;
            height: auto;
            padding-top: 200px;
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <div style="color: white;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <img src="{{ asset('images/sign-in-page.svg') }}" alt="Sign In Page" class="form-image" />
    <div class="form-container">
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <h1 style="font-size: 65px; font-weight: bold; color: black; margin-bottom: 20px;">Sign In</h1>
            <br><br>
            <label>Email</label>
            <input type="email" name="email" required><br>

            <label>Password</label>
            <input type="password" name="password" required><br>
            <br>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <a href="{{ route('welcome') }}" class="back-image-link">
        <img src="{{ asset('images/arrowback.png') }}" alt="Back" />
    </a>
    <div class="signup-text">
        Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
    </div>
</body>
</html>
