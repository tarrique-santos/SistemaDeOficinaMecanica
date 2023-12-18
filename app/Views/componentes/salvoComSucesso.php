<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/salvo.css">
</head>
<body>
    <div>
        <h1>Salvo com extremo sucesso!</h1>
    </div>
    <div>
        <img src="\img\icons\Tick_custom_icon.JSON" alt="" srcset="">
    </div>

    <script>
        function renderizarTelas() {
            const homeUrl = "/home";
            setTimeout(() => {
                window.location.href = homeUrl;
            }, 1750);
        }
        renderizarTelas();
    </script>
</body>
</html>
