<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jewloods</title>

        <?php require_once('layout/css.php');?>
    </head>
    <body>
        <!-- Nav -->
        <?php require_once('layout/_nav.php') ?>
        <!-- Header y Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class="rounded-circle"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class="rounded-circle"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4" class="rounded-circle"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/car1.jpg" class="d-block w-100 h-100" alt="..." width="">
                <div class="carousel-caption text-white d-none d-md-block">
                    <h5>Jewloods</h5>
                    <p>No limites tu estilo, los diamantes en tu piel no van a dejarte solo.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="img/car2.jpg" class="d-block w-100 h-100" alt="..." width="">
                <div class="carousel-caption text-white d-none d-md-block">
                    <h5>Jewloods</h5>
                    <p>No limites tu estilo, los diamantes en tu piel no van a dejarte solo.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/car3.jpg" class="d-block w-100 h-100" alt="..." width="">
                <div class="carousel-caption text-white d-none d-md-block ">
                    <h5>Jewloods</h5>
                    <p>No limites tu estilo, los diamantes en tu piel no van a dejarte solo.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/car4.jpg" class="d-block w-100 h-100" alt="..." width="">
                <div class="carousel-caption text-white d-none d-md-block ">
                    <h5>Jewloods</h5>
                    <p>No limites tu estilo, los diamantes en tu piel no van a dejarte solo.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        <!-- Novedades -->

        <section class="my-5 mx-auto w-75">
            <div class="d-flex align-items-center justify-content-center">
            <img src="img/pub1.jpg" alt="Anillos de boda" width="400" class="rounded ocultar">
                <div class="texto mx-3">
                    <h3>??S?? creativa con nuestra primera colaboraci??n art??stica!</h3>
                    <p>Celebramos la verdadera conexi??n con juegos de alianzas de boda y alianzas para parejas que representan el amor en todas sus formas. Todos los diamantes de Tiffany, desde el m??s peque??o hasta el m??s grande, cuentan con un nivel de artesan??a insuperable y cumplen unos exigentes est??ndares de calidad.</p>
                    <button class="bot1">Ver mas</button>
                </div>    
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-center flex-row-reverse">
                <img src="img/pub2.jpg" alt="Collar de oro" width="400" class="rounded ocultar">
                <div class="texto mx-3">
                    <h3>??NUEVOS estilos reci??n lanzados!</h3>
                    <p>Un nuevo acabado de metal con ba??o de oro de 14k. Nuevos s??mbolos en medallones y mini colgantes. Sus opciones para la autoexpresi??n son infinitas con los estilos totalmente personalizables de Jewloods ME.</p>
                    <button class="bot2 mx-4">Ver mas</button>
                </div>    
            </div>
        </section>

        <!-- Footer-->
        <?php require_once('layout/_footer.php') ?>
        <?php require_once('layout/js.php')?>
    </body>
</html>
