    <?php 
    $title = "Aplications";
    $subtitle = "Kinder y Preparatoria";
    include '../template/head.php';?>
    <link rel="stylesheet" href="<?= $host_name?>/assets/css/kinder.css">
    </head>
    <body>
        <?php include '../template/header.php';?>

        <?php include '../template/banner.php';?>

        <div class="section py-20">
            <div class="w-9">
                <div class="grid grid-c3 apps">
                    <?php include 'apps.php';?>
                </div>
            </div>
        </div>

        <?php include '../template/footer.php';?>
        
        <script src="<?= $host_name?>/assets/js/aplications.js"></script>
    </body> 
</html>