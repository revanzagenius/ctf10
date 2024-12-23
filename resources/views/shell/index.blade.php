<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            margin: 10px;
        }
        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        .navbar .menu li {
            display: inline;
        }
        .navbar .menu a {
            text-decoration: none;
            color: black;
            font-size: 1rem;
            transition: color 0.3s;
        }
        .navbar .menu a:hover {
            color: gray;
        }
        .container {
            margin-top: 40px;
        }

        h1 {
            color: #343a40;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 30px;
            text-align: center;
        }

        iframe {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar .menu {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('Assets/CTF 1.0.png') }}" alt="Logo" style="height:50px;">
        </div>
        <ul class="menu">
            <li><a href="#">Interactive Shell</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="
                        background-color: red;
                        color: white;
                        border: none;
                        padding: 5px 10px;
                        border-radius: 5px;
                        cursor: pointer;">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>CTF 1.0</h1>
        <iframe src="http://38.47.180.106:7777/" style="width: 100%; height: 500px; border: none;"></iframe>
    </div>
</body>
</html>


