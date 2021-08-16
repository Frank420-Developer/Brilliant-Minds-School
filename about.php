        <?php 
        $title = "About";
        include 'template/head.php';?>
        
        <link rel="stylesheet" href="<?= $host_name?>/assets/css/about.css">
    </head>
    <body>

    <?php include 'template/header.php';?>

    <?php include 'template/banner.php';?>

    <div class="content">
        <div class="history">
            <div class="history-info">
                <h2>Our History</h2>
                <div class="linea"></div>
                <p>El ideal de <strong>Brilliant Minds’ School</strong> es: Formar personas académicamente sólidas, tolerantes, críticas, involucradas, con responsabilidad social y el potencial de poner su parte para el desarrollo sostenible.</p>

                <p>Estos propósitos se realizan mediante la implementación de los programas bilingües, centrado tanto en el intelecto de manejar conceptos como en el desarrollo de habilidades y actitudes.</p>
            </div><!--.history-info-->
            <div class="history-imagen">
                <img src="<?= $host_name?>/assets/img/history_img.jpg" alt="">
            </div>
        </div><!--.history-->

        <div class="areas">
            <p>Quienes conforman la comunidad de <strong>Brilliant Minds’ School</strong> se sienten específicamente comprometidos en dos áreas:</p>
            <div class="academica">
                <h2>En la excelencia académica</h2>
                <ul>
                    <li><span>a&#41;</span> Ofrecer una educación internacionalmente reconocida</li>
                    <li><span>b&#41;</span> Promover un ambiente estimulante de estudio y trabajo</li>
                    <li><span>c&#41;</span> Fomentar el gusto por aprender e investigar</li>
                    <li><span>d&#41;</span> Trabajar en equipo</li>
                </ul>
            </div>
            <div class="practica">
                <h2>En la práctica y transmisión de valores</h2>
                <ul>
                    <li><span>a&#41;</span> Fomentar el pensamiento crítico</li>
                    <li><span>b&#41;</span> Desarrollar conciencia social, política y económica</li>
                    <li><span>c&#41;</span> Vivir responsablemente con la sociedad y con el medio ambiente</li>
                    <li><span>d&#41;</span> Fomentar el desarrollo de personas autónomas, capaces de tomar decisiones enfocadas al logro de un equilibrio entre responsabilidad y libertad.</li>
                    <li><span>e&#41;</span> Valorar el trabajo colaborativo como un elemento del desarrollo personal, académico y social.</li>
                </ul>
            </div>
        </div><!--.areas-->

        <div class="imagenes">
            <div class="imagen">
                <img src="<?= $host_name?>/assets/img/imagenes_1.jpg" alt="">
            </div>
            <div class="imagen">
            <img src="<?= $host_name?>/assets/img/imagenes_2.jpg" alt="">
            </div>
            <div class="imagen">
            <img src="<?= $host_name?>/assets/img/imagenes_3.jpg" alt="">
            </div>
        </div><!--.imagenes-->

        <div class="about">
            <div class="about-content">
                <div class="mision">
                    <h2>Nuestra Misión y Visión</h2>
                    <div class="linea"></div>
                    <p><strong>Misión:</strong> Somos una institución educativa privada, que ofrece enseñanza integral a los educandos en los niveles pre-básico y básico, a través del fortalecimiento de las competencias individuales e innovación permanente. Trazando el camino hacia una educación de calidad de acuerdo con las exigencias de la sociedad actual.</p>

                    <p><strong>Visión:</strong> Ser una institución bilingüe sólida y de prestigio, capaz de satisfacer las exigencias educativas, tecnológicas y culturales de una sociedad cuyo cambio es constante y exige la preparación adecuada de sus miembros.</p>
                </div>
                <div class="valores">
                    <h2>Valores</h2>
                    <div class="linea"></div>
                    <ul class="lista-valores">
                        <li type="square">Espíritu Emprendedor</li>
                        <li type="square">Resilencia</li>
                        <li type="square">Autocontrol</li>
                        <li type="square">Excelencia</li>
                        <li type="square">Empatía</li>
                        <li type="square">Confianza</li>
                        <li type="square">Amor</li>
                        <li type="square">Honestidad</li>
                        <li type="square">Responsabilidad</li>
                        <li type="square">Justicia</li>
                        <li type="square">Solidaridad</li>
                    </ul>
                </div>
            </div><!--.about-content-->
        </div><!--.about-->

    </div><!--.contenido-->

    <?php include 'template/footer.php';?>

    <script src="<?= $host_name?>/assets/js/about.js"></script>
</body> 
</html> 