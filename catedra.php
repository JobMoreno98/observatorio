<?php
require_once "layouts/head.php";
$json = file_get_contents('catedras.json');
$data = json_decode($json, true);
?>

<main class="main">
    <section id="catedra" class="section container  d-flex flex-column flex-lg-row justify-content-center justify-content-md-around flex-wrap align-items-center">
        <div>
            <?php
            foreach ($data as $nombreCatedra => $eventos) {
            ?>
                <div class="d-flex flex-column flex-md-row m-2 align-items-center mt-2 border rounded p-3">
                    <div style="min-width:150px;" class="me-2">
                        <img src="<?php echo './assets/img/' . $eventos[0]['portada'];  ?>" class="w-100" style="max-width:150px; aspect-ratio: 10 / 16; " alt="">
                    </div>

                    <div>
                        <?php

                        echo "<h2>" . htmlspecialchars($nombreCatedra) . "</h2>";
                        foreach ($eventos as $index => $evento) {

                            echo "<div class='evento'>";

                            // Título como enlace a detalle.php
                            $url = "detalle.php?catedra=" . urlencode($nombreCatedra) . "&evento=" . $index;
                            echo "<h4><a href='" . htmlspecialchars($url) . "'>" . htmlspecialchars($evento['titulo']) . "</a></h4>";

                            // Fragmento corto del texto (primeros 150 caracteres)
                            $texto = strip_tags($evento['texto']);
                            $fragmento = mb_substr($texto, 0, 150) . (mb_strlen($texto) > 150 ? '...' : '');
                            echo "<p>" . htmlspecialchars($fragmento) . "</p>";

                            // Fecha
                            echo "<p><strong>Fecha:</strong> " . htmlspecialchars($evento['fecha']) . "</p>";
                            echo "</div></div>";


                            echo '<hr/>';
                        }
                        ?>
                    </div>
                <?php
            }
                ?>

                </div>

    </section>
</main>

<?php
require_once "layouts/footer.php";
?>