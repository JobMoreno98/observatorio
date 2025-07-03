<?php
require_once "layouts/head.php";
// Suponiendo que recibes el nombre de la cátedra y el índice del evento por GET
// Ejemplo: detalle.php?catedra=Cátedra%20Regina%20Martínez%202022&evento=0

$json = file_get_contents('catedras.json');
$data = json_decode($json, true);

$catedra = $_GET['catedra'] ?? '';
$eventoIndex = isset($_GET['evento']) ? intval($_GET['evento']) : 0;

if (!isset($data[$catedra]) || !isset($data[$catedra][$eventoIndex])) {
    echo "Evento no encontrado.";
    exit;
}

$evento = $data[$catedra][$eventoIndex];
?>
<section class="container">

    <h1><?= htmlspecialchars($evento['titulo']) ?></h1>
    <p><strong>Cátedra:</strong> <?= htmlspecialchars($catedra) ?></p>
    <p><strong>Fecha:</strong> <?= htmlspecialchars($evento['fecha']) ?></p>

    <?php if (!empty($evento['enlace'])): ?>
        <p><a class="enlace" href="<?= htmlspecialchars($evento['enlace']) ?>" target="_blank">Ver video o enlace</a></p>
    <?php endif; ?>

    <div class="texto" style="text-align:justify;"> <?= nl2br(htmlspecialchars($evento['texto'])) ?></div>

    <?php if (!empty($evento['foto']) && is_array($evento['foto'])): ?>
        <div class="fotos d-flex flex-column flex-md-row flex-wrap align-items-center">
            <?php foreach ($evento['foto'] as $foto): ?>
                <div class="m-1">
                    <a href="./assets/img/<?= htmlspecialchars($foto) ?>">
                        <img src="./assets/img/<?= htmlspecialchars($foto) ?>" data-gallery="gallery1" class="glightbox" style="max-width:250px;aspect-ratio:1/1;object-fit: cover;" alt="Foto del evento" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <p><a href="./catedra.php#catedra">← Volver al listado de cátedras</a></p>

</section>
<?php

require_once "layouts/footer.php";
?>