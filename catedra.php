<?php
require_once "layouts/head.php";
?>

<main class="main">
    <section id="catedra" class="section container  d-flex flex-column flex-lg-row justify-content-center justify-content-md-around flex-wrap align-items-center">
        <div class="col-ms-12 col-lg-5 mt-3">
            <div class="container swiper" style="height: 520px">
                <div class="slider-wrapper h-100 w-100 m-auto">
                    <div class="card-list swiper-wrapper">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                        ?>
                            <div class="swiper-slide">
                                <img src="./assets/img/catedra/CatedraParaninfo<?php echo $i . ".jpeg"  ?>" class="d-block w-100" alt="...">
                            </div>
                        <?php } ?>
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>
                </div>
            </div>
        </div>

        <div class="col-ms-12 col-lg-6 mt-3">
            <div class="table-responsive">
                <table class="table align-middle w-100">
                    <tbody>
                        <tr>
                            <td>Estado de la libertad de expresión en México <br>
                                Leopoldo Maldonado
                                Director Regional de ARTICLE 19 México para México y Centroamérica
                            </td>
                            <td><a href="https://fb.watch/j7NsZxgDkJ/">https://fb.watch/j7NsZxgDkJ/</a></td>
                            <td rowspan="2" style="max-width:200px;">
                                <a href="https://www.cfpdudgvirtual.org/regina-martinez-violencia-y-periodismo-en-veracruz/">https://www.cfpdudgvirtual.org/regina-martinez-violencia-y-periodismo-en-veracruz/</a>
                                <br>
                                <a href="https://www.debate.com.mx/guadalajara/Realizara-UdeG-en-Jalisco-catedra-sobre-periodistas-asesinados-en-Mexico-Comienzan-con-Veracruz--20220317-0208.html">https://www.debate.com.mx/guadalajara/Realizara-UdeG-en-Jalisco-catedra-sobre-periodistas-asesinados-en-Mexico-Comienzan-con-Veracruz--20220317-0208.html</a>
                                <br>
                                <a href="https://www.debate.com.mx/guadalajara/Si-le-paso-a-Regina-ningun-periodista-esta-seguro-catedra-en-Jalisco-sobre-libertad-de-expresion-20220429-0280.html">https://www.debate.com.mx/guadalajara/Si-le-paso-a-Regina-ningun-periodista-esta-seguro-catedra-en-Jalisco-sobre-libertad-de-expresion-20220429-0280.html</a>
                                <br>
                                <a href="https://oem.com.mx/elsoldeorizaba/analisis/desde-fuera-15004711">https://oem.com.mx/elsoldeorizaba/analisis/desde-fuera-15004711</a>
                                <br>
                                <a href=" https://plumaslibres.com.mx/2022/04/29/asesinato-de-regina-martinez-fue-un-crimen-politico-y-de-estado-afirman-investigadores-y-periodistas-en-mesa-de-dialogo-en-universidad-de-guadalajara/"> https://plumaslibres.com.mx/2022/04/29/asesinato-de-regina-martinez-fue-un-crimen-politico-y-de-estado-afirman-investigadores-y-periodistas-en-mesa-de-dialogo-en-universidad-de-guadalajara/</a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Regina Martínez, Violencia y Periodismo en Veracruz <br>
                                Alberto J. Olvera Universidad Veracruzana <br>
                                Daniela Pastrana Red de Periodistas de a Pie <br>
                                Verónica Espinosa
                                Periodista, Coordinadora de corresponsales en Proceso
                            </td>
                            <td> <a href="https://fb.watch/j7NiUgb3kG/">https://fb.watch/j7NiUgb3kG/</a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php
require_once "layouts/footer.php";
?>