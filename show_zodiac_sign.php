<?php include('layouts/header.php'); ?>

<div class="container mt-5 text-center">
    <?php
    $data_nascimento = $_POST['data_nascimento'];
    $dataFormatada = date("d/m", strtotime($data_nascimento));

    $signos = simplexml_load_file("signos.xml");

    $signoEncontrado = false; // Adicionado para verificar se o signo foi encontrado

    foreach ($signos->signo as $signo) {
        $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
        $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
        $dataNascimentoFormatada = DateTime::createFromFormat('d/m', $dataFormatada);

        if ($dataNascimentoFormatada >= $dataInicio && $dataNascimentoFormatada <= $dataFim) {
            echo "<h2>Seu Signo: <span class='text-primary'>" . $signo->signoNome . "</span></h2>";
            echo "<p class='lead'>" . $signo->descricao . "</p>";
            $signoEncontrado = true; // Marcar que o signo foi encontrado
            break;
        }
    }

    if (!$signoEncontrado) {
        echo "<h2 class='text-danger'>Signo não encontrado. Verifique a data inserida.</h2>";
    }
    ?>
    <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
</div>

</body>
</html>
