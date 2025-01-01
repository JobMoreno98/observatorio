<?php
require_once "layouts/head.php";
$capsulas = [
    ['titulo' => '¿Cómo entender la violencia contra periodistas desde la academia?', 'link' => 'https://youtu.be/2SHnDl-_9f0'],
    ['titulo' => 'Derecho a la información y acoso judicial a periodistas', 'link' => 'https://youtu.be/FSsNWx9pse4'],
    ['titulo' => 'Peligrosa intolerancia ante la critica.', 'link' => 'https://youtu.be/-0SHQAPD5iY'],
    ['titulo' => 'La libertad de expresión también limitada en Jalisco'],
    ['titulo' => 'Nueva oportunidad para abatir la impunidad en crímenes contra periodistas ', 'link' => 'https://youtu.be/cXxhoYJ3I0M'],
    ['titulo' => 'Estigmatización a periodistas. ', 'link' => 'https://youtu.be/1H_9UC8wDlw'],
    ['titulo' => 'El bato. Javier Valdez a través de sus amigos', 'link' => 'https://youtu.be/5hlDpqE-TYQ'],
    ['titulo' => 'Balance de la violencia contra periodistas en 2022.'],
    ['titulo' => 'Inicio de año violento para periodistas', 'link' => 'https://youtu.be/Bj7MGPK_Ir0'],
    ['titulo' => 'Proteger el espacio cívico, obligación de los gobernantes.', 'link' => 'https://youtu.be/83-z6VJee1Q'],
    ['titulo' => 'Colectivos de periodistas en México como estrategias de  resistencia y resiliencia. 6 de febrero', 'link' => 'https://youtu.be/GVnWESbaiTA'],
    ['titulo' => 'Periodistas y personas defensoras de derechos ambientales siguen en riesgo', 'link' => 'https://youtu.be/7l_X83smUjU'],
    ['titulo' => '#8deMarzo. La violencia contra las mujeres periodistas', 'link' => 'https://youtu.be/Zco456ZfekM'],
];
?>

<section id="difusion" class="container">
    <h3 class="text-center">Cápsulas canal 44. Celia del Palacio Montiel <br>
        Se trasmiten quincenalmente los lunes a las 8:30 am.
    </h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Enlace</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($capsulas as $key => $value) {
                    $url = isset($value['link']) ? '<a href="' . $value['link'] . '">Ver</a>' : 'Sin enlace.';
                ?>
                    <tr>
                        <td><?php echo "Cápsula " . $key + 1 . $value['titulo'] ?></td>
                        <td><?php echo  $url ?></td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
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
            </tbody>
        </table>
    </div>
</section>

<?php
require_once "layouts/footer.php";
?>