<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <form action="conv.php" method="get">
            <label for="Dinheiro">Quantos R$ você tem em sua carteira?</label>
            <input type="number" name="dinheiro" id="iddinheiro" placeholder="Digite o valor:" step="0.001">
            <input type="submit" value="Converter">
        </form>
    </main>
    
</body>
</html>