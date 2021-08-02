<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Pônei</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Fale Conosco</h2>
    <section class="fale-conosco">
        <form method="POST" action="teste.php">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome" required><br>
            <label for="email">E-mail:</label><br>
            <input type="email" name="email" required><br>
            <label for="telefone">Telefone:</label><br>
            <input type="tel" name="telefone" required><br>
            <label for="opts">Insira a categoria do problema que está enfrentando:</label><br>
            <select name="opst" id="">
                <option value="tv">1 - TV</option>
                <option value="tel">2 - Telefone</option>
                <option value="internet">3 - Internet</option>
                <option value="streaming">4 - Streaming</option>
                <option value="sugestao">5 - Sugestão</option>
                <option value="outro">6 - Outro</option>
            </select><br>
            <label for="texto">Descreva com o maior número de detalhes seu problema:</label><br>
            <textarea name="texto" id="texto" cols="65" rows="10" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>