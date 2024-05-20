<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    
    <header>
        <div class="container">
            <div class="header-bar">
                <div class="logo">
                    <img src="#">
                </div>
                <nav class="navigation">
                    <ul>
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="#" class="active">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">COLLECTIBLES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                        </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="bg-footer">
            <div class="container">
                <div class="content-footer">
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                    <h1>contenuto</h1>
                </div>
            </div>
        </div>
    
        <div class="bg-last-footer">
            <div class="container footer-info">
                <div class="sign-up">
                    <button>SIGN-UP NOW</button>
                </div>
                <div class="follow-us">
                    <h3>FOLLOW US</h3>
                    <div class="social">
                        <img src="#">
                        <img src="#">
                        <img src="#">
                        <img src="#">
                        <img src="#">
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>