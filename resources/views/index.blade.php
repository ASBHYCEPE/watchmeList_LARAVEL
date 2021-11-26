<!DOCTYPE html>
<html lang="en">
<head>
    <title>WATCHME LIST</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
        <form action="/post" method="POST">
            <div class="col-3">
                <input type="text" placeholder="Enter the title of the show..." name="showTitle" required>
            </div>
            <div class="col-1">
                <select name="showCategory" >
                    <option value=0>PLANNING</option>
                    <option value=1>WATCHING</option>
                    <option value=2>FINISHED</option>
                    <option value=3>DROPPED</option>
                </select>
            </div>
            <div class="col-1">
                <input type="submit" value="ADD SHOW">
            </div>
        </form>
        <div id="category-container">
            <div class="category-block">
                <div class="category-title">
                    <h2>PLANNED TO WATCH</h2>
                </div>
            </div>
            <div class="category-block">
                <div class="category-title">
                    <h2>CURRENTLY WATCHING</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>