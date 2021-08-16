        <?php
        $title = "Contact";
        include 'template/head.php'; ?>

        <link rel="stylesheet" href="<?= $host_name?>/assets/css/contact.css">
    </head>
    <body>
        
    <?php include 'template/header.php';?>

    <?php include 'template/banner.php';?>

    <div class="contenido">
        <div class="mapa">
            <h1>Get in Touch</h1>
            <div class="linea my-20"></div>
            <div class="pt-20">
                <p class="paragraph py-20">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit us personally. We would be happy to answer your questions.</p>
                <iframe class="my-20" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7208.592692972185!2d-86.21429479971377!3d14.660543418076307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6c1fa581e3cb91%3A0x61e8317dd35037b8!2sJuticalpa%2C%20Honduras!5e0!3m2!1ses-419!2sus!4v1627600810709!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="informacion">
            <h2>Socials</h2>
            <div class="line my-20"></div>
            <div class="redes-sociales">
                <div class="redes-sociales-iconos">
                    <a href="" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="icon twitter"><i class="fab fa-twitter "></i></a>
                    <a href="" class="icon google"><i class="fab fa-google "></i></a>
                    <a href="" class="icon instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <h2>Phones</h2>
            <div class="line my-20"></div>
            <div class="phones">
                <a href="tel: 2785-1242"><i class="fas fa-phone-alt"></i> 2785-1242</a>
                <a href="tel: 9549-1910"><i class="fas fa-phone-alt"></i> 9549-1910</a>
            </div>

            <h2>E-mail</h2>
            <div class="line my-20"></div>
            <div class="phones">
                <a href="mailto: dirección@brilliantmindshn.com"><i class="fas fa-envelope-open"></i> dirección@brilliantmindshn.com</a>
            </div>

            <h2>Address</h2>
            <div class="line my-20"></div>
            <div class="phones">
                <a href="https://goo.gl/maps/krfjQNEaQBAeq4YJ6" target="_blank"><i class="fas fa-map-marker-alt"></i> Brilliant Mind's School, Juticalpa, Olancho, Honduras. 2020.</a>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php';?>

    <script src="<?= $host_name?>/assets/js/contact.js"></script>
</body> 
</html> 