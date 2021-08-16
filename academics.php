    <?php 
    $title ="Academics";
    include 'template/head.php';?>
    
        <link rel="stylesheet" href="<?= $host_name?>/assets/css/aplications.css">
    </head>
    <body>
        <?php include 'template/header.php';?>

        <?php include 'template/banner.php';?>
    <!--
        
    <div class="contenedor p-20">
            <div class="w-10">
                <div class="flex w-100">
                    <div class="box-left pt-20 pr-20">
                        <div class="menu pt-20 mr-20">
                            <div class="sec">
                                <button class="btn active w-10">Undergraduate Study</button> 
                                <div class="panel mostrar">
                                    <?php // include 'secondary_views/academics/part1.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php // include 'secondary_views/academics/part2.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php // include 'secondary_views/academics/part3.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php //include 'secondary_views/academics/part4.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php //include 'secondary_views/academics/part5.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php //include 'secondary_views/academics/part6.php'?>
                                </div>
                                <button class="btn w-10">Graduate & Professional Study</button>
                                <div class="panel">
                                    <?php //include 'secondary_views/academics/part7.php'?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    -->

    <div class="contenedor pt-20">
        <div class="w-9 py-20">
            <div class="flex pt-10 tools">
                <div class="img px-20">
                    <img class="w-10" src="<?= $host_name?>/assets/img/academics.jpg" alt="">
                </div>
                <div class="px-20 tools-info">
                    <h2>EN BRILLIANT MINDS SCHOOL</h2>
                    <div class="linea"></div>
                    <p class="paragraph">Tu hijo encuentra un espacio divertido que le permite satisfacer sus ganas y deseos por explorar todo lo que le rodea. Podrá además interactuar con otros niños mientras desarrolla habilidades sociales para seguir integrándose a la escuela y su entorno en general. </p>
                </div>
            </div>
        </div>
    </div>
        <?php include 'template/footer.php';?>
        
        <script src="<?= $host_name?>/assets/js/academics.js"></script>
        <!-- <script src="js/academics.js"></script> -->
        <script>
            // const act = document.querySelectorAll(".btn");
            // var i;

            // for(i = 0; i < act.length; i++){
            //     act[i].onclick = function(){
            //         this.classList.toggle("active");
            //         this.nextElementSibling.classList.toggle("mostrar");
            //     }
            // }
            // console.log(act);
        </script>
    </body> 
</html>