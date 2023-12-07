<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Login</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <form action="home" method="POST">
        <div class="cxLogoLogin">
            <img id="logo" src="\img\centro\logo-editor.svg" alt="" srcset="">
            <h1>Micuim Mecânica</h1>
        </div>
        <div class="cxLogin">
            <label for="">E-mail:</label>
            <input type="email" name=”email”>
        </div>
        <div class="cxLogin">
            <label for="">Senha:</label>
            <input type="password" name=”senha”>
        </div>
        <div class="cxEntrar">
            <input type="submit" name=”submit” value="Logar" id='btnLogar'> 
        </div>
    </form>
</body>

</html>