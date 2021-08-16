
    <?php 
    $title = "Home";
    include './template/head.php';?>
</head>
<body>
    <?php include './template/header.php';?>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                margin: 10,
                center: true,
                mouseDrag: true,
                dots: true
            });
        });
    </script>
    <div>
    <div class="owl-carousel">   
        <div class="item" id="item1">
            <h2>We are not perfection but excellence.</h2>
            <p>A esta experiencia de aprendizaje utilizando las herramientas tecnológicas, esperemos que juntos logremos los objetivos académicos esperados.</p>
            <h4 style="color: #FFCA05;">¡PRONTO ESTAREMOS JUNTOS DE NUEVO!</h4>
            <div class="btns">
                <a href=""><button class="btn btn-blue"> Sign Up for Excursion</button></a>
                <a href="<?= $host_name?>/academics.php"><button class="btn btn-white-outline"> Learn More</button></a>
            </div>
        </div>
        <div class="item" id="item2">
            <h2>Inspiration, Innovation, and Discovery</h2>
            <p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</p>
            <div class="btns">
                <a href=""><button class="btn btn-blue"> Sign Up for Excursion</button></a>
                <a href="<?= $host_name?>/academics.php"><button class="btn btn-white-outline"> Learn More</button></a>
            </div>
        </div>
        <div class="item" id="item3">
            <h2>Inspiration, Innovation, and Discovery</h2>
            <p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</p>
            <div class="btns">
                <a href=""><button class="btn btn-blue"> Sign Up for Excursion</button></a>
                <a href="<?= $host_name?>/academics.php"><button class="btn btn-white-outline"> Learn More</button></a>
            </div>
        </div>
    </div><!--.owl-carrousel-->
    <div class="space"></div>
    <div class="section section_abouts">
        <div class="w-9">
            <div class="flex flex_abouts">
                <div class="box_left">
                    <div class="title">
                             <h2>Brilliant Minds’ School</h2>
                             <span class="line_section"></span>
                    </div>
                    <div class="text">
                        <p>El ideal de Brilliant Minds’ School es: Formar personas académicamente sólidas, tolerantes, críticas, involucradas, con responsabilidad social y el potencial de poner su parte para el desarrollo sostenible.</p>
                    </div>
                    <div class="btns pt-20">
                        <a href="<?= $host_name?>/about.php"><button class="btn btn-blue">Leer mas</button></a>
                    </div>
                </div>
                <div class="box_right">
                    <div class="img">
                        <img width="300px" src="<?= $host_name?>/assets/img/logo.png" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="section">
    <div class="w-9">
    <div class="Carousel">
        <h2>NORMAS DE CONVIVENCIA PARA CLASES VIRTUALES</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma1.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma2.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma3.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma4.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma5.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma6.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma7.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="<?= $host_name?>/assets/img/norma8.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>
    </div>
    </div>


    <div class="boletin">
        <div class="matricula-online">
            <div class="matricula-tramite-imagen">
                <img src="<?= $host_name?>/assets/img/matricula-en-linea.jpg" alt="">
            </div>
            <div class="matricula-tramite-informacion">
                <h2>Boletín Informativo Escolar</h2>
                <h2>Matricula Online</h2>
                <div class="linea"></div>
                <div class="matricula-informacion">

                    <h3><span>Numeros</span>  Autorizados <i class="fas fa-phone-alt"></i></h3>
                    
                    <div class="info animado">
                        <div class="cuentas">
                            <div class="info-whats img_bancos">
                                <img src="<?= $host_name?>/assets/img/whatsapp_icon.jpg" alt="">
                            </div>
                            <div class="cuenta pl-20">
                                <div class="numbers">
                                    <div class="name_account">
                                        <h3>WhatsApp</h3>
                                    </div>
                                    <div class="number_account">
                                        
                                        <a href="https://wa.me/50427851242?text=">2785-1242</a> /
                                        <a href="https://wa.me/50495491910?text=">9549-1910</a> /
                                        <a href="https://wa.me/50497803693?text=">9780-3693</a> /
                                        <a href="https://wa.me/50499503863?text=">9950-3863</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3><span>Cuentas</span>  Bancarias <i class="fas fa-money-check"></i></h3>

                    <div class="info animado">
                        <div class="cuentas">
                            <div class="cuenta-img img_bancos">
                                <img src="<?= $host_name?>/assets/img/bac.png" alt="">
                            </div>
                            <div class="numbers">
                                <div class="cuenta py-20">
                                    <div class="name_account">
                                        <h3>Cuentas de banco </h3>
                                        <p>Brilliant's Minds School S de RL</p>
                                    </div>
                                    <div class="number_account">
                                        
                                        <a href="#">CTA: Ahorros:&nbsp;&nbsp; 743 980 761</a><br>
                                        <a href="#">CTA: Cheques:&nbsp; 730 419 431</a>
                                    </div>
                                </div><!--.cuenta-->
                            </div><!--.numbers-->
                        </div><!--.cuentas-->
                    </div><!--.info-->

                    <div class="info animado">
                        <div class="cuentas">
                            <div class="cuenta-img2 img_bancos">
                                <img src="<?= $host_name?>/assets/img/boc.jpg" alt="">
                            </div>
                            <div class="numbers">
                                <div class="cuenta pl-20">
                                   <div class="name_account">
                                        <h3>Cuenta de Ahorro</h3>
                                        <p>Nidia Yaribel Ramos</p>
                                        </div>
                                        <div class="number_account">
                                        <a href="">21-801-044609-0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--.info-->
                </div><!--.matricula-informacion-->
                
            </div><!--.matricula-tramite-informacion-->
        </div><!--.matricula-online-->
    </div><!--.boletín-->

    <div class="section">
        <div class="statistics">
            <div class="statistics-title">
                <h2>Estadísticas</h2>
            </div>
            <div class="linea"></div>
            <div class="statistics-text">
                <p>James Whitaker University was founded on the principle that by pursuing big ideas and sharing what we learn, we make the world a better place. For more than 135 years, we haven’t strayed from that vision.</p>
            </div>
            <div class="statistics-numbers">
                <div class="statistics-numbers-icons">
                    <div>
                        <div class="container-icon"><i class="fas fa-graduation-cap"></i></div>
                        <h3>97&#37;</h3>
                        <div class="linea"></div>
                        <h4>Graduates</h4>
                    </div>

                    <div>
                        <div class="container-icon"><i class="fas fa-suitcase"></i></div>
                        <h3>30+</h3>
                        <div class="linea"></div>
                        <h4>Certified Teachers</h4>
                    </div>

                    <div>
                        <div class="container-icon"><i class="fas fa-building"></i></div>
                        <h3>8</h3>
                        <div class="linea"></div>
                        <h4>Student Campuses</h4>
                    </div>
                    
                    <div>
                        <div class="container-icon"><i class="fas fa-user-friends"></i></div>
                        <h3>6510</h3>
                        <div class="linea"></div>
                        <h4>Students</h4>
                    </div>

                </div><!--.statistics-numbers-icons-->
            </div><!--.statistics-numbers-->
        </div><!--.statistics-->
    </div><!--.container-statistics-->
    
    <div class="container-get my-20">
        <div class="fade">
            <div class="get-started">
                <div class="get-started-title">
                    <h2>PLATAFORMA EDUCATIVA VIRTUAL</h2>
                </div>
                <div class="get-started-p">
                    <p>PERIODO 2021 - 2022.</p>
                </div>
                <div class="btns flex-justify-center">
                    <a href="<?= $host_name?>/contact.php"><button class="btn btn-red">Contactar</button></a>
                </div>
            </div><!--.get-started-->
        </div><!--.fade-->
    </div><!--.container-get-->

    <div class="section">
        <div class="events w-8">
            <div class="get-started-title">
                <h2>Eventos</h2>
            </div>
            <div class="linea"></div>
            <div class="grid grid-c2 pt-20 mt-20">
                <div class="event">
                    <div class="event-img">
                        <img src="<?= $host_name?>/assets/img/event 1.jpg" alt="">
                        <div class="capa">
                            <div class="btns">
                                <a href="#" class="color-white w-100"><button class="btn btn-red">Book Now</button></a>
                                <a href="<?= $host_name?>/events/event.php" class="color-white w-100"><button class="btn btn-white-outline">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-info">
                        <div class="event-fecha">
                            <strong>31</strong>
                            <p>September </p>                    
                            <strong> 5:00pm </strong>
                        </div>
                        <div class="event-title">   
                            <h3>Spacewalking Conference</h3>
                            <p><i class="fas fa-user"></i> Walter Stanley</p>
                        </div>
                    </div>
                </div><!--event-->

                <div class="event">
                    <div class="event-img">
                        <img src="<?= $host_name?>/assets/img/event 2.jpg" alt="">
                        <div class="capa">
                            <div class="btns">
                                <a href="#" class="color-white w-100"><button class="btn btn-red">Book Now</button></a>
                                    <a href="<?= $host_name?>/events/event.php" class="color-white w-100"><button class="btn btn-white-outline">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-info">
                        <div class="event-fecha">
                            <strong>31</strong>
                            <p>September </p>                    
                            <strong> 5:00pm </strong>
                        </div>
                        <div class="event-title">   
                            <h3>Spacewalking Conference</h3>
                            <p><i class="fas fa-user"></i> Walter Stanley</p>
                        </div>
                    </div>
                </div><!--event-->

                <div class="event">
                    <div class="event-img">
                        <img src="<?= $host_name?>/assets/img/event 3.jpg" alt="">
                        <div class="capa">
                            <div class="btns">
                                <a href="#" class="color-white w-100"><button class="btn btn-red">Book Now</button></a>
                                <a href="<?= $host_name?>/events/event.php" class="color-white w-100"><button class="btn btn-white-outline">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-info">
                        <div class="event-fecha">
                            <strong>31</strong>
                            <p>September </p>                    
                            <strong> 5:00pm </strong>
                        </div>
                        <div class="event-title">   
                            <h3>Spacewalking Conference</h3>
                            <p><i class="fas fa-user"></i> Walter Stanley</p>
                        </div>
                    </div>
                </div><!--event-->

                <div class="event">
                    <div class="event-img">
                        <img src="<?= $host_name?>/assets/img/event 4.jpg" alt="">
                        <div class="capa">
                            <div class="btns">
                                <a href="#" class="color-white w-100"><button class="btn btn-red">Book Now</button></a>
                                <a href="<?= $host_name?>/events/event.php" class="color-white w-100"><button class="btn btn-white-outline">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-info">
                        <div class="event-fecha">
                            <strong>31</strong>
                            <p>September </p>                    
                            <strong> 5:00pm </strong>
                        </div>
                        <div class="event-title">   
                            <h3>Spacewalking Conference</h3>
                            <p><i class="fas fa-user"></i> Walter Stanley</p>
                        </div>
                    </div>
                </div><!--event-->
            </div><!--.event-container-->
            <div class="btns py-20 flex-justify-center">
                <a href="<?= $host_name?>/events.php"><button class="btn btn-blue"> Ver mas eventos<i class="fas fa-arrow-right"></i></button> </a>
            </div>
        </div><!--.events-->
    </div><!--.container-events-->

    <div class="slideshow" data-cycle-fx=carousel  data-cycle-timeout=1000 data-cycle-carousel-visible=5
    data-cycle-carousel-fluid=true data-allow-wrap=false>
        <div class="w-10" style="background-image: url('./assets/img/img-gallery1.jpg');">
            <div class="fade h-100">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
        <div class="w-10" style="background-image: url('./assets/img/img-gallery2.jpg');">
            <div class="fade h-100">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
        <div class="w-10" style="background-image: url('./assets/img/img-gallery3.jpg');">
            <div class="fade h-100">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
        <div class="w-10" style="background-image: url('./assets/img/img-gallery4.jpg');">
            <div class="fade h-100">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
    </div>
    <?php include './template/footer.php';?>
     
    <script src="<?= $host_name?>/assets/js/home.js"></script>
    <script src="<?= $host_name?>/assets/plugins/cycle2.js"></script>
</body> 
</html>