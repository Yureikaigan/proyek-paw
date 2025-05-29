<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - {{ $user->name }}</title>
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
        .profile-container {
            max-width: 600px;
            margin: 300px auto 30px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 90%;
            box-sizing: border-box;
            background-color: #f9f9f9;
            border: 2px solid #ffc95d;
            border-radius: 12px;
            margin-bottom: 30px;   
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-item {
            margin-bottom: 15px;
        }
        .profile-item:nth-child(odd) {
            background-color: #ffffff;
        }

        .profile-item:nth-child(even) {
            background-color: #f0f0f0;
        }
        .profile-label {
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }
        .profile-value {
            font-size: 30px;
            margin-left: 10px;
            color: #555;
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
    </style>
</head>
<body>
    <a href="{{ route('welcome') }}" class="back-image-link">
        <img src="{{ asset('images/arrow-back.svg') }}" alt="Back" />
    </a>
    
    <div class="profile-container">
        <h1>Profile</h1>
        
        <div class="profile-item">
            <span class="profile-label">Name:</span>
            <span class="profile-value">{{ $user->name }}</span>
        </div>

        <div class="profile-item">
            <span class="profile-label">Email:</span>
            <span class="profile-value">{{ $user->email }}</span>
        </div>

        <div class="profile-item">
            <span class="profile-label">Registered At:</span>
            <span class="profile-value">{{ $user->created_at->format('F d, Y') }}</span>
        </div>

        <!-- Add more fields as needed -->
    </div>
</body>
</html>
