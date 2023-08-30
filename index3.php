<?php 
    if(isset($_POST['url']) ){

        if(!empty($_POST['url'])){

            $url = $_POST['url'];

            if(filter_var($url, FILTER_VALIDATE_URL)){

                $message = '<a class="well">Oklm votre URL est valide</a>';

            }else{

                $message = '<a class="error">Votre URL n\'est pas valide</a>';
            }
        }else{
            $message = '<a class="error">Erreur veullez bien remplir le formulaire</a>';
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Vérif</title>
</head>
<body>
    <div class="container">
        <h2>Verification d'URL</h2>
        <form method="POST">
            <div class="inputs">
                <input name="url" type="text" placeholder="Entrer L'URL" value="<?php if(isset($_POST['url'])){ echo $_POST['url']; }  ?>">
                <input type="submit" value="Vérifier">
            </div>
            
            <?php
                if(isset($message) && !empty($message)){
                    echo $message;
                } 
            ?>
        </form>
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
    form input[type="submit"]{
        width: 22%;
        margin: 0 1%;
    }
    .error{
        display: block;
        font-size: 12px;
        font-style: italic;
        color: red;
    }
    .well{
        display: block;
        font-size: 12px;
        font-style: italic;
        color: green;
    }
</style>
</html>