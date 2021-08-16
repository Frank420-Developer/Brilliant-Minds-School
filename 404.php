<?php 
$title = "404";
include 'template/head.php';?>
        
        <link rel="stylesheet" href="<?= $host_name?>/assets/css/404.css">
</head>
<body>

    <div class="section not">
        <div class="w-8">
            <div class="img">
                <a href="<?= $host_name?>/index.php"><img class="w-10" src="<?= $host_name?>/assets/img/logo.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="w-8">
            <div class="error">
                <h1>404</h1>
                <h2>Sorry, the page was not found</h2>
                <div class="linea"></div>
                <p class="paragraph">You may have mistyped the address or the page may have moved.</p>
                <div class="btns">
                    <a href="<?= $host_name?>/index.php"><button class="btn btn-red"><i class="fas fa-arrow-left mr-10"></i>Back to Home Page</button></a>
                    <a href="<?= $host_name?>/contact.php"><button class="btn btn-blue"><i class="fas fa-envelope"></i>Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</body> 
</html> 