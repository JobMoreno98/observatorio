<?php
require_once "layouts/head.php";
$json = file_get_contents('info_catedras.json');
$eventos = json_decode($json, true);

?>

<section class="container" id="seminario">
    <div class="border border-grey rounded p-4">
        <?php

        foreach ($eventos as $evento) {
            echo "<h4>" . htmlspecialchars($evento['titulo']) . "</h4>";
            echo "<p><strong>Fecha:</strong> " . htmlspecialchars($evento['fecha']) . "</p>";
            if (!empty($evento['enlace'])) {
                echo "<p><a href=\"" . htmlspecialchars($evento['enlace']) . "\" target=\"_blank\">Ver evento</a></p>";
            } else {
                echo "<p><em>Enlace no disponible</em></p>";
            }
            echo "<hr>";
        } ?>
    </div>
</section>

<?php
require_once "layouts/footer.php";
?>