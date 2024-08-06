<?php

require('RomanNumeralConverter.php');
$converter = new RomanNumeralConverter();

$valor = $_POST['valor'] ? $_POST['valor'] : '';


if (is_numeric($valor)) {
    $resultado = "O valor <b>" . $valor . "</b> em algarismos romanos é: <b>" . $converter->toRoman($valor) . "<b>";
} else {
    $resultado = $resultado = "O valor <b>" . $valor . "</b> em algarismos arábicos é: <b>" . $converter->toArabic($valor);
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Conversor Arábico - Romano</title>
</head>

<body>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Conversor Arábico - Romano</h1>
            </div>
        </div>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="row my-3">
                <div class="col-4">
                    <label for="valor" class="form-label">Insira um valor arábico ou romano: </label>

                </div>
                <div class="col-6">
                    <input type="text" name="valor" id="valor" class="form-control">
                </div>

                <div class="col-2">

                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </div>
        </form>

        <div class="alert alert-success" id="mensagem">
            <?= $resultado; ?>
        </div>
    </div>


    <script>
        let mensagem = document.getElementById('mensagem');
        setTimeout(function() {
            mensagem.style.display = 'none';
        }, 3000);
    </script>

</body>

</html>