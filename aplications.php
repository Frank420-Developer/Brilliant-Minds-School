<?php 
$title = "Aplications";
include 'template/head.php';?>
<link rel="stylesheet" href="<?= $host_name?>/assets/css/aplications.css">
</head>
<body>
<?php include 'template/header.php';?>

<?php include 'template/banner.php';?>

<div class="contenedor pt-20">
    <div class="w-9 py-20">
        <div class="flex pt-10 tools">
            <div class="img px-20">
                <img class="w-10" src="<?= $host_name?>/assets/img/apli1.jpg" alt="">
            </div>
            <div class="px-20 tools-info">
                <h2>HERRAMIENTAS PARA CLASE VIRTUAL</h2>
                <div class="linea"></div>
                <p class="paragraph">El confinamiento por el covid-19 ha generado que las personas dejen de asistir a sus labores educativas, ya sean alumnos o personal docente. Ante la imposibilidad de impartir clase de forma física, existen numerosas herramientas virtuales que permiten dar clases online cómodamente. </p>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php';?>

<script src="<?= $host_name?>/assets/js/aplications.js"></script>
</body> 
</html>