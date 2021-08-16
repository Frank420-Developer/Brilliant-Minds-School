<?php 
    $title = "Academics";
    $subtitle = "Elementary";
    $subsubtitle = "2nd Grade - B";
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
                        <div class="teacher-card">
                            <div class="img flex py-10">
                                <img class="w-10" src="<?= $host_name?>/assets/img/teacherb2.jpg" alt="">
                            </div>
                            <div class="teacher-name py-10">
                                <h3>Mrs. Julissa Chirinos</h3>
                            </div>
                            <div class="teacher-info py-10">
                                <h4>Mestro Guía 2° Grado "B"</h4>
                                <p class="paragraph py-10"><a href="mailto:jchirinos@brilliantmindshn.com">jchirinos@brilliantmindshn.com</a></p>
                                <h5>Idioma: Ingles - Español</h5>
                            </div>
                            <div class="btns">
                                <button class="btn btn-blue">AGENDAR CITA</button>
                            </div>
                        </div><!--.teacher-card-->

                        <div class="teacher-card">
                            <div class="img flex py-10">
                                <img class="w-10" src="<?= $host_name?>/assets/img/teacher3a.jpg" alt="">
                            </div>
                            <div class="teacher-name py-10">
                                <h3>Mrs. Elsy Zelaya</h3>
                            </div>
                            <div class="teacher-info py-10">
                                <h4>Docente: Español</h4>
                                <p class="paragraph py-10"><a href="mailto:ezelaya@brilliantmindshn.com">ezelaya@brilliantmindshn.com</a></p>
                                <h5>Idiona: Español</h5>
                            </div>
                            <div class="btns">
                                <button class="btn btn-blue">AGENDAR CITA</button>
                            </div>
                        </div><!--.teacher-card-->

                        <div class="teacher-card">
                            <div class="img flex py-10">
                                <img class="w-10" src="<?= $host_name?>/assets/img/teacher2a.jpg" alt="">
                            </div>
                            <div class="teacher-name py-10">
                                <h3>Mrs. Jessy Ramos</h3>
                            </div>
                            <div class="teacher-info py-10">
                                <h4>Docente: Ciencias Sociales</h4>
                                <p class="paragraph py-10"><a href="mailto:jramos@brilliantmindshn.com">jramos@brilliantmindshn.com</a></p>
                            </div>
                            <div class="btns">
                                <button class="btn btn-blue">AGENDAR CITA</button>
                            </div>
                        </div><!--.teacher-card-->
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

                    <div class="schedules-days w-9 py-20">

                    <div class="day w-10 py-20">
                        <div class="day-name">
                            <h3>Monday</h3>
                        </div>
                        <div class="linea w-100"></div>
                        <div class="sch1a py-20">
                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Language & Grammar</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:00 - 8:40</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Ciencias Sociales</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:40 - 9:20</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Math</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 9:50 - 10:30</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Phonics and Reading</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 10:30 - 11:10</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->
                        </div>
                    </div><!--.day-->

                    <div class="day w-10 py-20">
                        <div class="day-name">
                            <h3>Tuesday</h3>
                        </div>
                        <div class="linea w-100"></div>
                        <div class="sch1a py-20">
                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Language & Grammar</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:00 - 8:40</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Phonics & Reading</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:40 - 9:20</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Español</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 9:50 - 10:30</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>P. E.</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 10:30 - 11:10</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->
                        </div>
                    </div><!--.day-->

                    <div class="day w-10 py-20">
                        <div class="day-name">
                            <h3>Wednesday</h3>
                        </div>
                        <div class="linea w-100"></div>
                        <div class="sch1a py-20">
                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Languaje & Grammar</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:00 - 8:40</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Math</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:40 - 9:20</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Español</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 9:50 - 10:30</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Phonics and Reading</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 10:30 - 11:10</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->
                        </div>
                    </div><!--.day-->

                    <div class="day w-10 py-20">
                        <div class="day-name">
                            <h3>Thursday</h3>
                        </div>
                        <div class="linea w-100"></div>
                        <div class="sch1a py-20">
                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Science</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:00 - 8:40</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Ciencias Sociales</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:40 - 9:20</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Math</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 9:50 - 10:30</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Español</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 10:30 - 11:10</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->
                        </div>
                    </div><!--.day-->

                    <div class="day w-10 py-20">
                        <div class="day-name">
                            <h3>Friday</h3>
                        </div>
                        <div class="linea w-100"></div>
                        <div class="sch1a py-20">
                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Science</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:00 - 8:40</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Technology</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 8:40 - 9:20</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Math</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 9:50 - 10:30</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->

                            <div class="signature">
                                <div class="name pb-10">
                                    <h4>Español</h4>
                                </div>
                                <div class="time">
                                    <p class="paragraph">Time: 10:30 - 11:10</p>
                                </div>
                                <div class="link-class">
                                    <div class="btns">
                                        <button class="btn btn-blue">Classroom</button>
                                        <button class="btn btn-red">Google Meet</button>
                                    </div>
                                </div>
                            </div><!--.signature-->
                        </div>
                    </div><!--.day-->

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