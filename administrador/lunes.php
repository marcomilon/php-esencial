<?php 

include "header.php"; 

$tareas = [
    ["1", "Ir al Banco", "terminado"],
    ["2", "Pagar la luz", "por terminar"],
    ["3", "Estudiar más HTML", "por terminar"]
];

?>

<body>

    <div class="container">

        <img src="elephpant.png">

        <h1>Administrador de tareas</h1>

        <p>
            La siguiente lista son las tareas que
            debo hacer:
        </p>

        <table class="table">

            <tr>
                <td>Número</td>
                <td>Nombre de la tarea</td>
            </tr>

            <?php foreach($tareas as $value): ?>
            <?php $cssClass = getCssClass($value[2]) ?>
            <tr>
                <td><?= $value[0] ?></td>
                <td class="<?= $cssClass ?>"><?= $value[1] ?></td>
            </tr>

            <?php endforeach; ?>

        </table>

        <a href="index.php">Volver</a>

    </div>
</body>

<?php include "footer.php" ?>