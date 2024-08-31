<!DOCTYPE html>
<html lang="en">

<?php include 'php/head.php'; ?>

<link rel="stylesheet" href="./assets/stylesheets/especializaciones.css">

<body>
    <?php include 'php/header.php'; ?>

    <main>
        <div id="quienesSomos" class="quienesSomos">
            <div class="titulo-logo text-center">
                <img class="img-fluid" src="./assets/images/DiLucaLogo.png" alt="Diluca">
            </div>

            <div class="container">
                <div class="row justify-content-between">

                    <!-- Primer contenedor (imágenes) -->
                    <div class="col-md-5 d-none d-md-block">
                        <!-- Oculta este div en pantallas pequeñas -->
                        <div class="row">
                            <div class="col-6 col-md-12 mb-4">
                                <div class="img-container">
                                    <img class="imgMaquina" src="./assets/images/especializaciones/d14.png" alt="">
                                </div>
                            </div>
                            <div class="col-6 col-md-12 mb-4">
                                <div class="img-container">
                                    <img class="imgMaquina" src="./assets/images/especializaciones/d15.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segundo contenedor (texto) -->
                    <div class="lista-container col-md-5 col-12">
                        <h3>Nuestras especializaciones</h3>
                        <ul>
                            <li><a href="demolicion.php">*DEMOLICIÓN</a></li>
                            <li><a href="hidricas.php">*HÍDRICAS</a></li>
                            <li><a href="hormigonado.php">*HORMIGONADO</a></li>
                            <li><a href="movimientos.php">*MOVIMIENTO DE SUELOS</a></li>
                            <li><a href="remediacion.php">*REMEDIACION DE SUELOS</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include 'php/footer.php'; ?>

</body>
</html>
