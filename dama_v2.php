<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuleiro de Damas</title>
    <link rel="stylesheet" href="dama.css" /> <!-- Correção no nome do arquivo CSS -->
</head>

<body>
<div class="container">
<button onclick="jogo.mudaJogador()" style="width: 150px; height: 50px;">Troca jogador</button>
<button onclick="location.reload()" style="width: 150px; height: 50px; margin-left: 20px; margin-right: 20px;">Reiniciar</button>
    <div id="tabuleiro"></div>
    <div id="tabela">
    <div id="placarCabecalho" class="placaresCabecalho">Placar</div>
        <div id="placar1" class="placares">Placar Jogador 1</div>
        <div id="placar2" class="placares">Placar Jogador 2</div>
    </div>
</div>
    <script src="dama.js"></script>
    <script src="horario.js"></script>
</body>

</html>
