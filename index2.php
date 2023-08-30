
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année en cours</title>
</head>
<body>
    <div>
        <h2>L'année en cours</h2>
        <p><?php echo Date('Y'); ?></p>
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
    div{
        padding: 50px;
        border-radius: 12px;
        background-color: #fff;
        font-weight: 300;
    }
    div p{
        margin-top: 15px;
    }
</style>
</html>