<?php
require_once "layouts/head.php";
$seminarios = [
    ['titulo' => 'El Lado Visible de los Procesos de Cambio en el Periodismo Contemporáneo', 'fecha' => '23 de mayo', 'link' => 'https://www.facebook.com/observalibertad/videos/550406400048633/'],
    ['titulo' => 'Reportear en el desamparo. Salvador de León y Rubén González, ponentes. Jessica Padilla comentarista.', 'fecha' => '23 de junio', 'link' => 'https://www.facebook.com/observalibertad/videos/699099778056555/'],
    ['titulo' => 'Desafíos del periodismo emprendedor en México. Sarelly Martínez y Diego Ramos, ponentes. Martha Guillén comentarista', 'fecha' => '26 de agosto ', 'link' => 'https://www.facebook.com/observalibertad/videos/382445970710437/'],
    ['titulo' => 'Riesgos de los periodistas en Centroamérica. Octavio Enríquez, Jennifer Ávila, Edwin Segura, ponentes. Alexia Ávalos moderadora. ', 'fecha' => '23 de septiembre', 'link' => 'https://www.facebook.com/observalibertad/videos/830219977976187/'],
    ['titulo' => 'Violencia judicial contra periodistas en México. Sergio Aguayo conferencista. Celia del Palacio moderadora. ', 'fecha' => '7 de octubre'],
    ['titulo' => 'La importancia y los riesgos del periodismo de investigación. Araceli Fabian ponente. Arnoldo Delgadillo, Valeria Durán, comentaristas.', 'fecha' => '14 de octubre ', 'link' => 'https://www.facebook.com/observalibertad/videos/884774175824190/'],
    ['titulo' => 'Presentación del libro Surviving México. Celeste González de Bustamante ponente. María Elena Hernández comentarista. ', 'fecha' => '28 de octubre.', 'link' => 'https://www.facebook.com/observalibertad/videos/3511775562387915/'],
    ['titulo' => 'Del establecimiento de agenda a la estigmatización de periodistas. Víctor Hugo Reyna ponente. Lydette Carrión, Ernesto Aroche, comentaristas. ', 'fecha' => '4 de noviembre.', 'link' => 'https://www.facebook.com/observalibertad/videos/1298460047556636/'],
    ['titulo' => 'Contrapesos de los medios. Gerardo Albarrán ponente. Julio Ríos comentarista. ', 'fecha' => '18 de noviembre.', 'link' => 'https://www.facebook.com/observalibertad/videos/822490825726574/'],
];
?>

<section class="container" id="seminario">
    <h3 class="text-center">ACTIVIDADES DEL SEMINARIO PERMANENTE DEL OBSERVATORIO SOBRE LIBERTAD DE EXPRESIÓN 2022</h3>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>TÍTULO</th>
                    <th>FECHA</th>
                    <th>LINK</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($seminarios as $key => $value) {
                    $url = isset($value['link']) ? '<a href="' . $value['link'] . '">' . $value['link'] . '</a>' : 'Fue presencial. La trasmisión se hizo desde la Difusión CUCSH.';
                ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $value['titulo'] ?></td>
                        <td><?php echo $value['fecha'] ?></td>
                        <td><?php echo  $url ?></td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php
require_once "layouts/footer.php";
?>