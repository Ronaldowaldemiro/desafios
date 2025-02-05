<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise Feita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php 

            $n = $_GET["analisador"] ?? 0;

            echo "<p>Analisando o numero <strong>" . number_format($n, 3, ",", ".") . "</strong> informado pelo usuario:</p>";

            $int = (int)$n;
            $fra = $n - $int;

            echo "<ul><li> A parte interira do numero é <strong>" . number_format($int, 0, ",", "."). "</strong></li>";
            echo "<li> A patre fracionaria do numero é <strong>" . number_format($fra, 3, ",", "."). "</strong></li></ul>";
                    
        
        ?>

        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>