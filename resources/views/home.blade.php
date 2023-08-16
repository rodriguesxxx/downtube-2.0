<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DownTube 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>

<body>
    <div class="background"></div>
    <img src="{{ asset('images/logo.png') }}" width="auto" height="240px">

    <div class="container">
        <h1>DownTube 2.0</h1>

        <form action="/informations" method="POST">
            <input type="text" id="url" name="url" placeholder="Insira o link" required>
        <br>


        <div class="custom-select-wrapper">

            <p>Escolha a Resolução</p>
            <select class="custom-select" name="resolution">
                <option class="custom-select-option" value="360p">360p</option>
                <option class="custom-select-option" value="720p">720p</option>
                <option class="custom-select-option" value="1080p">1080p</option>
            </select>
        </div>
            <input class="btn-baixar" type="submit" value="Baixar" id="myBtn">
        </form>
        <h3 id="state">seila</h3>
        <a id="down-link" href="/prepare">msg download</a>

    </div>
    <footer>
        <span>developed by <a href="https://www.linkedin.com/in/daniel-rodrigues-242893274/" target="_blank">Daniel R.</a> and <a href="http://github.com/JuanPietro14" target="_blank">Juan P.</a></span>
    </footer>
    <script src="{{asset('js/state.js')}}"></script>
</body>
</html>
