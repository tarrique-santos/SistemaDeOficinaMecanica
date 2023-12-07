<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Hamburguer</title>
    <link rel="stylesheet" href="/css/header.css">
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #fff;
            justify-content: center;
            width: 50%;
        }

        #menu {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <header id="cabecalho">
        <div id="hamburguer">
            <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                onclick="toggleOverlay()">
                <path d="M4 11h12v2H4v-2Zm0-5h16v2H4V6Zm0 12h7.235v-2H4v2Z"></path>
            </svg>
        </div>
        <div class="cxLogo">
            <img id="logo" src="\img\logo-branca\Micuim Mecânica\default_transparent_765x625.png" alt="" srcset="">
        </div>
    </header>
    <div id="overlay" onclick="toggleOverlay()">
        <div id="menu">
            <button class='atalhoLateral'>Cadastar Usuário</button>
            <button class='atalhoLateral'>Cadastrar Veiculo</button>
            <button class='atalhoLateral'>Cadastrar Peça</button>
            <button class='atalhoLateral'>Cadastar Serviço</button>
            <button class='atalhoLateral'>Criar OS</button>
            <button class='atalhoLateral'>Perfil</button>
            <button class='atalhoLateral'>Log out</button>
        </div>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#85D3F2" fill-opacity="1"
            d="M0,192L17.1,181.3C34.3,171,69,149,103,154.7C137.1,160,171,192,206,197.3C240,203,274,181,309,170.7C342.9,160,377,160,411,181.3C445.7,203,480,245,514,229.3C548.6,213,583,139,617,106.7C651.4,75,686,85,720,112C754.3,139,789,181,823,176C857.1,171,891,117,926,117.3C960,117,994,171,1029,160C1062.9,149,1097,75,1131,64C1165.7,53,1200,107,1234,149.3C1268.6,192,1303,224,1337,202.7C1371.4,181,1406,107,1423,69.3L1440,32L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
        </path>
    </svg> -->
    <script>
        function toggleOverlay() {
            var overlay = document.getElementById("overlay");
            overlay.style.display = (overlay.style.display === "flex") ? "none" : "flex";
        }
    </script>
</body>

</html>