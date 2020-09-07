<?php 

include "header.php"; 

$tareas = [
    [
        "id" => "1", 
        "tarea" => "Ir al dentista", 
        "estado" => "terminado"
    ],
    [
        "id" => "2", 
        "tarea" => "Pagar el agua", 
        "estado" => "por terminar"
    ],
    [
        "id" => "3", 
        "tarea" => "Estudiar más PHP", 
        "estado" => "terminado"
    ]
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
            <?php $cssClass = getCssClass($value["estado"]) ?>
            <tr>
                <td><?= $value["id"] ?></td>
                <td class="<?= $cssClass ?>"><?= $value["tarea"] ?></td>
            </tr>

            <?php endforeach; ?>

        </table>

        <a href="index.php">Volver</a>

    </div>
</body>

<?php include "footer.php" ?>