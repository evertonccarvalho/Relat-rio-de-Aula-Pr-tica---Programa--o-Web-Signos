<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <h1 class="text-center">Descubra o Seu Signo</h1>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="mb-4">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Consultar Signo</button>
    </form>
</div>

</body>
</html>
