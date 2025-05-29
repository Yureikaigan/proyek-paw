<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
            font-size: 30px;
            display: block;
            margin-top: 15px;
            margin-bottom: 10px;
            font-weight: light;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            border: 4px solid #3477ec;
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
            background-color: #3477ec;
            color: white;
            border: none;
            border-radius: 60px;
            padding: 40px 40px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            width: 80%;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: #3477ec;
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

        .singin-text {
            margin-bottom: 200px;
            text-align: center;
            font-size: 30px;
            color: rgb(0, 0, 0);
        }

        .singin-text a {
            color: #3477ec;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .singin-text a:hover {
            text-decoration: underline;
        }

        .form-image {
            display: block;
            height: auto;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <img src="{{ asset('images/sign-up-page.svg') }}" alt="Sign Up Page" class="form-image" />
    <div class="form-container">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <h1 style="font-size: 65px; font-weight: bold; color: black; margin-bottom: 20px;">User Registration</h1>
            <label>Name</label>
            <input type="text" name="name" required><br>

            <label>Email</label>
            <input type="email" name="email" required><br>

            <label>Password</label>
            <input type="password" name="password" required><br>

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" required><br>
            @if ($errors->any())
                    <div style="font-size: 35px; color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit">Register</button>
            <a href="{{ route('welcome') }}" class="back-image-link">
                <img src="{{ asset('images/arrow-back.svg') }}" alt="Back" />
            </a>
            <div class="singin-text">
                Already have an account? <a href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>
</body>
</html>
