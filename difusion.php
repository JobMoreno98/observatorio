<?php
require_once "layouts/head.php";
$data = json_decode(file_get_contents('capsulas.json'), true);
$años = array_keys($data);
?>

<section id="difusion" class="section container features" data-aos="zoom-in-up" data-aos-duration="1000">
    <h3 class="text-center">Cápsulas canal 44. Celia del Palacio Montiel <br>
        Se trasmiten quincenalmente los lunes a las 8:30 am.
    </h3>
<ul class="nav nav-tabs d-flex flex-column flex-md-row justify-content-center">
    <?php foreach ($años as $index => $año): ?>
        <li class="nav-item col-sm-12 col-md-4 col-lg-2 m-2">
            <a class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" 
               data-bs-toggle="tab" 
               data-bs-target="#tab-<?php echo $año; ?>">
                <h4 class="text-center"><?php echo $año; ?></h4>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<div class="tab-content">
    <?php foreach ($años as $index => $año): ?>
        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" 
             id="tab-<?php echo $año; ?>" 
             data-aos="zoom-in-up" 
             data-aos-duration="1000">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data[$año] as $i => $capsula): ?>
                            <tr>
                                <td>
                                    <?php echo "<b>Cápsula " . ($i + 1) . ":</b> " . $capsula['titulo']; ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($capsula['link'])) {
                                        echo '<a href="' . $capsula['link'] . '" target="_blank">Ver</a>';
                                    } else {
                                        echo 'Sin enlace';
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    <?php endforeach; ?>
</div>




<h3 class="text-center">Otras conferencias</h3>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Enlace</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Conferencia de prensa sobre la creación del Observatorio de Libertad de Expresión UdeG. Diciembre de 2021</td>
                <td><a href="https://www.youtube.com/watch?v=7Sz9_m-nsSI">Ver</a></td>
            </tr>
            <tr>
                <td>Conferencia “El estado de la libertad de expresión en México” como parte de la Cátedra Regina Martínez. 10 de abril de 2022.</td>
                <td><a href="https://www.youtube.com/watch?v=JLPpNH07f7g">Ver</a></td>
            </tr>
            <tr>
                <td>Testimonio Celia del Palacio. Sobre el día mundial para la libertad de prensa. Para CUSur. 10 de abril de 2022.</td>
                <td><a href="https://www.youtube.com/watch?v=gANWnBtYE7w">Ver</a></td>
            </tr>
            <tr>
                <td>Entrevista sobre el Observatorio de Libertad de Expresión para la revista Comunicación y Sociedad.</td>
                <td><a href="https://open.spotify.com/episode/4KcFWGB9XQ9a4BmZSOwQ4z?si=PWsP6gMBTHW6bk8ECAfHyA">Ver</a></td>
            </tr>
            <tr>
                <td>Rueda de prensa sobre los avances del Observatorio de Libertad de Expresión.</td>
                <td><a href="https://www.facebook.com/share/v/15mL1SJV5J/?mibextid=wwXIfr">Ver</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div>
    <h3 class="text-center">Libros publicados</h3>
    <div class="d-flex">
        <div>
            <a href="http://www.publicaciones.cucsh.udg.mx/kiosko/2023/Estado%20de%20la%20libertad%20en%20Jalisco.pdf">
                <img src="./assets/archivos/Portada Estado Libertad de Expresion.jpg" alt="" style="aspect-ratio: 1/1;width:250px; object-fit:contain;">
                <span>Ver libro</span>
            </a>
        </div>
        <div>
            <a href="./assets/archivos/Medios de comunicacion en Jalisco.pdf">
                <img src="./assets/archivos/portada_ana.jpg" alt="" style="aspect-ratio: 1/1;width:250px; object-fit:contain;">
                <span>Ver libro</span>
            </a>
        </div>
    </div>
</div>
</section>

<?php
require_once "layouts/footer.php";
?>