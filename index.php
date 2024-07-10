<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>Jogo da Damas</title>
</head>
<body>
    <div class="container">
        
        <form action="dama_v2.php" method="POST" name="nomes">
        <div id="titulo"> JOGO DE DAMAS </div>
        <div>
            <label for="Informe o nome do jogador 1:" class="labelNomes">INFORME O NOME DO JOGADOR 1:</label>
            <input type="text" name="nomeJogador1" id="nomeJogador1" class="entradaNomes">
        </div>
        <div>
            <label for="Informe o nome do jogador 2:" class="labelNomes">INFORME O NOME DO JOGADOR 2:</label>
            <input type="text" name="nomeJogador2" id="nomeJogador2" class="entradaNomes">
        </div>
        <div>
            <button type="submit" id="botaoJogar"> JOGAR </button>
        </div>
        </form>
    </div> 
</body>
</html>