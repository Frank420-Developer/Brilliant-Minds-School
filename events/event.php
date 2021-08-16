
    <?php 
    $title = "Events";
    $subtitle = "Event";
    include '../template/head.php';?>
    
        <link rel="stylesheet" href="<?= $host_name?>/assets/css/event.css">
    </head>
    <body>
        <?php include '../template/header.php';?>

        <?php include '../template/banner.php';?>
        
        <div class="section">
            <div class="w-9">
                <div class="grid grid-c2">
                    <div class="box-left p-20">
                        <div class="img mb-20">
                            <img src="<?= $host_name?>/assets/img/event 3.jpg" alt="Evento 1">
                        </div>
                        <div class="event-teacher pt-20">
                            <h3 class="py-20">A Few Words About Lecturer</h3>
                            <div class="line mb-10"></div>
                            <div class="teacher">
                                <div class="flex">
                                    <div class="teacher-img my-10">
                                        <img src="<?= $host_name?>/assets/img/teacher1.jpg" alt="Teacher 1">
                                    </div>
                                    <div class="teacher-name my-10 px-20">
                                        <h4 class="pb-20">Bruce Hawkings</h4>
                                        <div class="teacher-contact">
                                            <div class="mb-20">
                                                <span><i class="fas fa-phone-alt mr-10"></i>1-800-1234-567</span>
                                            </div>
                                            <div class="mb-20">
                                                <span><i class="fas fa-envelope mr-10"></i><a href="mailto: info@demolink.org">info@demolink.org</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher-info py-10">
                                    <p class="paragraph">Bruce has been involved in graphic design education for over 10 years. He is a passionate designer and design educator, believing that what matters above all else is a great idea executed appropriately and brilliantly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-right p-20">
                        <div class="event-i">
                            <h2>Graphic Design Workshop</h2>
                            <div class="linea" ></div>
                            <p class="paragraph pt-20">A picture paints a thousand words. So if you're planning on pursuing a career in graphic design, you'd better make sure you know what you're saying.</p>

                            <p class="paragraph pt-20"> This four-day workshop introduces you to the principles of design, exploring the role of colour, shape and form. You'll get expert advice on portfolio preparation and create pieces in InDesign.</p>
                        </div>  
                        <div class="event-q pt-20">
                            <h3 class="py-20">When is the next workshop and how do I apply?</h3>
                            <div class="line mb-10"></div>
                            <p class="paragraph py-20">Details of the next available workshop are below:</p>
                            <div class="flex pb-20">
                                <h5><strong>Date: </strong> </h5><p class="paragraph pl-10"> Thursday 14th April</p>
                            </div>
                            <div class="flex pb-20">
                                <h5><strong>Times: </strong> </h5><p class="paragraph pl-10"> 9.30am - 3.30pm</p>
                            </div>
                            <div class="flex pb-20">
                                <h5><strong>Fee: </strong> </h5><p class="paragraph pl-10"> $120</p>
                            </div>
                            <div class="flex pb-20">
                                <h5><strong>Location: </strong> </h5><p class="paragraph pl-10"> 1 Fitzwilliam Street, Parramatta - JWU's College of Design & Commerce Campus</p>
                            </div>
                        </div>
                        <div class="event-q pt-20">
                            <h3 class="py-20">What you need to bring</h3>
                            <div class="line mb-10"></div>
                            <p class="paragraph pt-20">All essential materials and equipment are provided, however, we encourage students to bring an A3 portfolio folder (including a minimum of 5 plastic sleeves) and a USB drive.</p>
                            <p class="paragraph pt-20">If you'd like to enroll, download and complete this form, and then e-mail it to mail@demolink.org with the subject line "JWU 2018 Workshop".</p>
                            <div class="btns">
                                <a href=""><button class="btn btn-blue">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../template/footer.php';?>
        
        <script src="<?= $host_name?>/assets/js/event.js"></script>
    </body> 
</html>