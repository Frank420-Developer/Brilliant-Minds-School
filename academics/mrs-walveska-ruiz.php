<?php 
$title = "Mrs. Walveska Ruiz";
include '../template/head.php';
?>
</head>
<body>

<?php include '../template/header.php';?>
<style>
    p{
        font-size: 13px !important;
    }
    @media (max-width: 950px) {
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
                        <p class="paragraph">Tengo el gusto de presentarme, mi nombre es Walveska Ruiz (más conocida como Miss Wally) y quiero dar la bienvenida a este nuevo año escolar en el cual estoy a cargo de la coordinación y guianza en la instrucción de los alumnos del 4to grado. Soy estudiante de la licenciatura de Pedagogía y Ciencias de la Educación y voluntaria en Cruz Roja Hondureña.</p>
                        <p class="paragraph py-10">Es para mí motivo de alegría poder contribuir con la educación de nuestro país, y pondré mi mayor esfuerzo, así como el resto de docentes responsables en complementar la educación que se ha iniciado en sus hogares, sabiendo que juntos podremos brindar lo mejor para garantizar el correcto desempeño y aprovechamiento escolar, teniendo presente el manejo de altos valores morales, y el trato siempre considerado y respetuoso.</p>
                        <p class="paragraph py-10">Es un año de retos, pero también de mucho aprendizaje en el cual podremos compartir nuevas experiencias. Les invito a siempre ver positivamente cada nuevo peldaño que vayamos escalando en esta nueva aventura.</p>
                        <p class="paragraph">Recordemos que… <strong>“Con esfuerzo y perseverancia podrás alcanzar tus metas”.</strong></p>
                    </div>
                    <div class="btns pt-20">
                        <a href="<?= $host_name?>/academics/4th-grade.php"><button class="btn btn-blue">Regresar</button></a>
                    </div>
                </div>
                <div class="box_right px-20">
                    <div class="img">
                        <img class="w-100" src="<?= $host_name?>/assets/img/teacher4grade1.jpg" alt="Teacher">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer.php';?>
</body>
</html>