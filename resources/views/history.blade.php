<!DOCTYPE html>
<html lang="en">
<head>
    <title>HISTORY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="header-wrapper">
            <div id="logo">
                <div class="logo-item">
                    <img src="{{asset('img/logo.png')}}" id="img-logo" alt="eye logo">
                </div>
                <div class="logo-item">
                    <h1>WATCHME <span style="color: #27ae60">LIST</span></h1>
                </div>
            </div>
            <div id="nav">
                <a href="/">HOME</a>
                <a href="/history">WATCHLIST HISTORY</a>
            </div>
        </div>
    </header>
    <div id="container">
        <div id="block">
            <div class="block-item">
                <h1>YOUR PAST SHOWS</h1>
            </div>
            <div class="block-item">
                <a href="">CLEAR ALL SHOWS</a>
            </div>
        </div>
        <div id="category-container">
            <div class="category-block">
                <div class="category-title">
                    <h2>DROPPED SHOWS</h2>
                </div>
            </div>
            <div class="category-block">
                <div class="category-title">
                    <h2>FINISHED WATCHING</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>