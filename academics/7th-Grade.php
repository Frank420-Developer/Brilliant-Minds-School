<?php 
    $title = "Academics";
    $subtitle = "Middle School";
    $subsubtitle = "7th Grade";
    include '../template/head.php';?>

    <link rel="stylesheet" href="<?= $host_name?>/assets/css/middle.css">
    <link rel="stylesheet" href="<?= $host_name?>/assets/css/kinder.css">

    </head>
    <body>
        <?php include '../template/header.php';?>

        <?php include '../template/banner.php';?>

        <div class="section">
            <div class="w-9">
                <div class="teachers">
                    <div class="title">
                        <h2>Information about Teachers</h2>
                        <div class="line mb-20"></div>
                    </div>
                    <div class="grid grid-c3">

                        <?php include 'grades-info/teachers-card.php';?>

                    </div><!--.teachers-cards-->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="w-10">
                <div class="horario">
                    <div class="title w-9">
                        <h2><?= $subsubtitle?> - Online Class Schedule</h2>
                        <div class="linea"></div>
                        <div class="linea"></div>
                    </div>
                    <div class="schedule-title">
                        <h2 class="text-center">Vistual Classroom</h2>
                    </div>
                    
                    <div>
                        <?php include 'grades-info/schedules.php';?>
                    </div>

                    <div class="schedule-title">
                        <h2 class="text-center">Applications</h2>
                    </div>
                    <div class="w-8 py-20">
                        <div class="grid grid-c3 apps py-20">
                            <?php include '../aplications/apps.php';?>
                        </div>
                    </div>
                </div><!--.horario-->
            </div>
        </div><!--.section-->
        <?php include '../template/footer.php';?>
        
        <script src="<?= $host_name?>/assets/js/academics.js"></script>
    </body> 
</html>