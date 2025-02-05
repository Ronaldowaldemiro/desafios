<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Trabalhando com numeros aleatorios</h1><br><br>
        <h5>Gerando numeros aletorios entre 0 e 100...</h5>
        <?php 

            $min = 0;
            $max = 100;

            $num = mt_rand($min, $max);
            echo "<p>O numero gerado foi <strong>$num</strong></p>";
        
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar numero</button>
    </main>
    
</body>
</html>