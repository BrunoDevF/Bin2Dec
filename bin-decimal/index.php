<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Binario</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'DotGothic16', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--background);
        }
        :root{
            --white:#fff;
            --background: #f2f3f5;
            --gray-line: #dcdde0;
            --text: #6666;
            --text--highlight: #b3b9ff;
            --title: #2e384d;
            --red: #e83f5b;
            --green: #4cd62b;
            --blue: #5965e0;
            --blue-dark: #4952b8;
            --blue-twitter: #2aa9e0;
        }
        .container {
            text-align: center;
            background: var(--white);

            padding: 1.2rem;
        }
        .container h2 {
            color: var(--title);
            font-size: 1.5rem;
        }

        .container input[type=text]{
            margin: 15px 0;
        }

        .container input[type=submit]{
            display: block;
            
            margin: 0 auto;
            padding: 0 1.5rem;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="POST">
            <h2>Digite aqui um numero binario que deseja converter para Decimal</h2> 
            <input type="text" name="bin" placeholder="Digite aqui... " >
            <input type="submit" name="enviar" value="enviar">
        </form>
        <div class="result-decimal">
        <p>
            <?php

                if(isset($_POST["enviar"])){
                    
                    $binario = $_POST['bin'];
                    
                    $n = bindec($binario);
                    echo ($binario . " em decimal equivale a " . $n . "\n");
                }
            ?>
        </p>    
        </div>
    </div>

    
</body>
</html>



