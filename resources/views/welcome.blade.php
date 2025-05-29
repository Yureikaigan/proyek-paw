<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #293f5f;
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 30px 15px;
      text-align: center;
      min-height: 100vh;
      box-sizing: border-box;
    }

    h1 {
      margin-top: 0;
    }

    .buttons-container {
      margin-bottom: 20px;
    }

    .button {
      background-color: #ffc95d;
      color: white;
      border: none;
      border-radius: 70px;
      padding: 20px 40px;
      font-size: 30px;
      font-weight: lighter;
      cursor: pointer;
      width: 80%;
      transition: background-color 0.3s ease;
      display: block;
      margin: 0 auto 30px auto;
      text-decoration: none;
      line-height: normal;
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

    .logo-image {
        display: block;
        height: auto;
        padding-top: 100px;
    }

    .button-login {
        background-color: white;
        color: black;
        font-weight: bold
    }

    .button-login:hover {
        background-color: #ddd; /* Slight gray hover */
    }

    .button-register {
        background-color: #ffc95d;
        color: white;
        font-weight: bold
    }

    .button-register:hover {
        background-color: #0056b3; /* Your existing hover color */
    }

  </style>
</head>
<body>
<img src="{{ asset('images/logosamasama.png') }}" alt="Logo" class="logo-image" />
  <div class="buttons-container">
    <a href="{{ route('login') }}" class="button button-login">Sign In</a>
<a href="{{ route('register') }}" class="button button-register">Sign Up</a>
  </div>
</body>
</html>
