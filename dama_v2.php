<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuleiro de Damas</title>
    <link rel="stylesheet" href="dama.css" />
</head>

<?php

$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$nomeJogador1 = '';
$nomeJogador2 = '';

if (isset($dados['nomeJogador1']) && isset($dados['nomeJogador2'])) {

    $nomeJogador1 = $dados['nomeJogador1'];
    $nomeJogador2 = $dados['nomeJogador2'];
}
?>

<body onload="autoPlay()">
    <!-- Adicione a tag de áudio aqui -->

    <audio controls hidden>
        <source src="musica.mp3" type="audio/mp3">
    </audio>

    <div class="container">

        <button onclick="jogo.mudaJogador()" style="width: 150px; height: 50px;">Troca jogador</button>
        <button onclick="location.reload()" style="width: 150px; height: 50px; margin-left: 20px; margin-right: 20px;">Reiniciar</button>
        <div id="tabuleiro"></div>
        <div id="tabela">

            <!-- Modo Noturno -->
            <div class="night_mode" id="night_mode">
                <div class="indicador"></div>
            </div>

            <div id="placarCabecalho" class="placaresCabecalho">Placar</div>
            <!-- Coloca o nome informado na tela inicial no placar -->
            <div id="placar1" class="placares"><?php echo ($nomeJogador1); ?></div>
            <div id="placar2" class="placares"><?php echo ($nomeJogador2); ?></div>
       
        </div>
        <div id="modal">
            <div id="textoVencedor">
                <div id="vencedor1"> O jogador <?php echo ($nomeJogador1); ?> é o </br><img src="VITORIA.svg" style="height: 40px; width: 40px;"> VENCEDOR! <img src="VITORIA.svg" style="height: 40px; width: 40px;"></div>
                <div id="vencedor2"> O jogador <?php echo ($nomeJogador2); ?> é o </br><img src="VITORIA.svg" style="height: 40px; width: 40px;"> VENCEDOR! <img src="VITORIA.svg" style="height: 40px; width: 40px;"></div>
            </div>
        </div>
    </div>
    <script src="dama.js"></script>
    <script src="horario.js"></script>
</body>

</html>
