<?php 
$title = "Mrs. Elsy Zelaya";
include '../template/head.php';
?>
</head>
<body>

<?php include '../template/header.php';?>
<style>
    p{
        font-size: 15px !important;
    }
    @media (max-width: 768px) {
        .flex_teacher{
            flex-direction: column-reverse;
        }
    }
</style>
<div class="section section_abouts">
        <div class="w-9">
            <div class="flex flex_teacher">
                <div class="box_left p-20">
                    <div class="text">
                        <p class="paragraph">Un saludo cordial, mi nombre es Mrs. Elsy Zelaya este año estaré impartiendo la clase de español, compartiendo conocimientos, actividades y propósitos para lograr un aprendizaje significativo en cada uno de mis estudiantes.</p>
                    </div>
                    <div class="btns pt-20">
                        <a href="<?= $host_name?>/academics/4th-grade.php"><button class="btn btn-blue">Regresar</button></a>
                    </div>
                </div>
                <div class="box_right px-20">
                    <div class="img">
                        <img class="w-100" src="<?= $host_name?>/assets/img/teacher3a.jpg" alt="Teacher">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer.php';?>
</body>
</html>