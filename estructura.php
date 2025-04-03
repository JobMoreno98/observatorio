<?php
require_once "layouts/head.php";
$nombres = [
    'Dra. Frida Viridiana Rodelo Amezcua' => ['foto' => 'Frida.jpg', 'archivo' => 'Frida Viridiana Rodelo Amezcua.docx'],
    'Dra. María Elena Hernández Ramírez' => ['foto' => 'MARÍA ELENA.png', 'archivo' => 'María Elena Hernández Ramírez.docx'],
    'Dr. Darwin Franco Migues' => ['foto' => 'darwin.jpg', 'archivo' => 'Darwin Franco.docx'],
    'Dr. Armando Zacarías Castillo' => ['foto' => 'Armando Zacarías.jpeg', 'archivo' => 'Armando Zacarías Castillo.docx'],
    'Dr. Diego Noel Ramos Rojas' => ['foto' => 'Diego.jpg', 'archivo' => 'Diego Noel Ramos Rojas.docx'],
    'Dra. Gabriela Gómez Rodríguez' => ['foto' => 'Gabriela Gomez.jpeg', 'archivo' => 'Gabriela Gómez Rodríguez.docx'],
    'Dra. Elva Araceli Fabián González' => ['foto' => 'Elva Araceli Fabián.jpg', 'archivo' => 'Elva Araceli Fabián González.docx'],
    'Mtro. Omar Guillermo García Santiago' => ['foto' => 'Omar García.jpg', 'archivo' => 'Omar García.docx'],
    'Mtro. José Carlos Rodríguez Toral' => ['foto' => 'José Carlos Rodríguez Toral.jpg', 'archivo' => 'José Carlos Rodríguez Toral.docx'],
    'Mtro. Julio Ríos Gutiérrez' => ['foto' => 'Julio Rios.jpg', 'archivo' => 'Julio Ríos.docx'],
    'Mtro. Javier Antonio Zepeda Orozco' => ['foto' => 'Javier Zepeda.jpeg', 'archivo' => 'Javier Zepeda.docx'],
    'Mtra. Nancy Wendy Aceves Velázquez' => ['foto' => 'WendyAceves.jpeg', 'archivo' => 'Wendy Aceves Velázquez.docx'],
    'Mtra. Rosa Eugenia García Gómez ' => ['foto' => 'Rosa Eugenia García Gómez.jpg', 'archivo' => 'Rosa Eugenia García Gómez.docx'],
];

$consejo =
    [
        'Diego Petersen Farah' => ['tipo' => 'Periodista'],
        'Sergio René de Dios Corona' =>  ['tipo' => 'Periodista'],
        'Sonia Serrano' =>  ['tipo' => 'Periodista'],
        'Jade Ramírez' =>  ['tipo' => 'Periodista'],
        'Héctor Farina' =>  ['tipo' => 'Académico'],
        'Brenda Guadalupe Ramos Villaseñor' =>  ['tipo' => 'Académica'],
        'César Omar Mora' =>  ['tipo' => 'Académico'],
    ];
?>
<main class="main">
    <section id="estructura" class="section container features" data-aos="zoom-in-up" data-aos-duration="1000">
        <ul class="nav nav-tabs d-flex flex-column flex-md-row justify-content-center">

            <li class="nav-item col-sm-12 col-md-4 col-lg-2 m-2">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#coordinadores">
                    <h4 class="text-center">Coordinadores</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-sm-12 col-md-4 col-lg-2 m-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#observadores">
                    <h4 class="text-center">Red de Observadores</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-sm-12 col-md-4 col-lg-2 m-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#consejo">
                    <h4 class="text-center">Consejo Consultivo</h4>
                </a>
            </li><!-- End Tab 3 Nav -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="coordinadores" data-aos="zoom-in-up" data-aos-duration="1000">

                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-center">Coordiandores</h3>
                    <div class="border p-2 rounded d-flex flex-column flex-md-row align-items-center mt-1  m-2">
                        <div>
                            <img src="./assets/img/estructura/img/Celia del Palacio.jpeg" alt="" style="max-width: 200px;" class="rounded me-2">
                        </div>
                        <div>
                            Dra. Celia del Palacio Montiel <br>
                            Coordinadora <br>
                            Correo: <a href="mailto:celia.delpalacio@academicos.udg.mx">celia.delpalacio@academicos.udg.mx</a> <br>
                            <a href="./assets/img/estructura/archivos/Celia del Palacio.docx">Enlace a curriculum</a>
                        </div>
                    </div>
                    <div class="border p-2 rounded  d-flex flex-column flex-md-row align-items-center mt-1  m-2">
                        <div>
                            <img src="./assets/img/estructura/img/Carlos Rafael Hernandez.jpeg" alt="" style="max-width: 200px;" class="rounded me-2">
                        </div>
                        <div>
                            Dr. Carlos Rafael Hernández Vargas <br>
                            Secretario Técnico <br> Correo: <a href="mailto:carlos.hvargas@academicos.udg.mx">carlos.hvargas@academicos.udg.mx</a> <br>
                            <a href="./assets/img/estructura/archivos/Carlos Rafael Hernández Vargas.docx">Enlace a curriculum</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="observadores" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="col-12 ">
                    <h3 class="text-center">Red de Observadores</h3>
                    <?php
                    foreach ($nombres as $key => $value) {
                        $url = isset($value['foto']) ? "./assets/img/estructura/img/" . $value['foto'] : "https://picsum.photos/200";
                        $archivo = isset($value['archivo']) ? "./assets/img/estructura/archivos/" . $value['archivo'] : "";
                    ?>
                        <div class="border p-2 rounded d-flex flex-column flex-md-row  align-items-center mt-1 m-2">
                            <div>
                                <img src="<?php echo  $url ?>" alt="" style="max-width: 200px; aspect-ratio: 1 / 1; object-fit: cover;" class="rounded me-2">
                            </div>
                            <div>
                                <?php echo $key ?> <br>
                                <a href="<?php echo  $archivo ?>" target="_blank" rel="noopener noreferrer">Enlace a curriculum</a>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>

            </div>
            <div class="tab-pane fade" id="consejo" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="col-12 ">
                    <h3 class="text-center">Consejo Consultivo</h3>
                    <div class=" d-flex flex-column flex-md-row  flex-wrap justify-content-center">

                        <?php
                        foreach ($consejo as $key => $value) {
                        ?>
                            <div class="border text-center p-2 rounded col-sm-12 col-md-4 col-lg-2 m-2 mt-1 m-2">
                                <?php echo $key ?><br>
                                <?php echo $value['tipo'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once "layouts/footer.php";
?>