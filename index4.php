
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Vérif</title>
</head>
<body>
    <div class="container">
        <h2>Cliquez sur le bouton pour aller sur la page suivante. Là-bas vous serai directement rediriger sur facebook</h2>
        <a href="pagesuivante.php">Page suivante</a>
    </div>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        outline: none;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100vh;
        background: rgba(0,0,0,0.1);
    }
    .container{
        padding: 50px;
        border-radius: 12px;
        background-color: #fff;
        font-weight: 300;
        width: 500px;
    }
    .inputs{
        display: flex;
    }
    div p{
        margin-top: 15px;
    }
    form{
        margin-top: 20px;
    }
    form input[type="text"]{
        width: 82%;
        border: none;
        outline: none;
        border-bottom: 1px solid gray;
        padding: 10px;
        padding-left: 3px;
        font-size: 16px;
    }
    a{
        display: block;
        width: 100px;
        padding: 10px;
        margin: 20px auto;
        margin-bottom: 0;
        background: rgba(0,0,0,0.1);
    }
</style>
</html>