<?php
require_once "layouts/head.php";
?>


<section class="container" id="comunicados">
    <h3 class="text-center">Pronunciamientos y Comunicados</h3>
    <div>
        <h4>Comunicados 2021</h4>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a  href="./assets/comunicados/2021/1.jpg" class="glightbox">
                        <img src="./assets/comunicados/2021/3.jpg" style="height: 500px;width:100%;"  class="img" alt="image" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a data-description="prueba" href="./assets/comunicados/2021/2.jpg" class="glightbox">
                        <img src="./assets/comunicados/2021/2.jpg" style="height: 500px;width:100%;"  class="img" alt="image" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a target="_blank" href="./assets/comunicados/2021/3.jpg" class="glightbox">
                        <img src="./assets/comunicados/2021/3.jpg" style="height: 500px;width:100%;"  class="img" alt="image" />
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div>
        <h4>Comunicados 2022</h4>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                for ($i = 5; $i <= 26; $i++) {
                ?>
                    <div class="swiper-slide">
                        <a target="_blank" href="./assets/comunicados/2022/<?php echo $i . ".jpg"  ?>" class="glightbox">
                            <img src="./assets/comunicados/2022/<?php echo $i . ".jpg"  ?>" style="height: 500px;width:100%;" class="img" alt="...">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div>
        <h4>Comunicados 2023</h4>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                for ($i = 26; $i <= 29; $i++) {
                ?>
                    <div class="swiper-slide">
                        <a target="_blank" href="./assets/comunicados/2023/<?php echo $i . ".jpg"  ?>" class="glightbox">
                            <img src="./assets/comunicados/2023/<?php echo $i . ".jpg"  ?>" style="height: 500px;width:100%;" class="img" alt="...">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div>
        <h4>Comunicados 2024</h4>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                for ($i = 42; $i <= 46; $i++) {
                ?>
                    <div class="swiper-slide">
                        <a target="_blank" href="./assets/comunicados/2024/<?php echo $i . ".jpg"  ?>" class="glightbox">
                            <img src="./assets/comunicados/2024/<?php echo $i . ".jpg"  ?>" style="height: 500px;width:100%;" class="img" alt="...">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<?php
require_once "layouts/footer.php";
?>