<?php 
    $title = "Aplications";
    $subtitle = "7th, 8th, and 9th Grade";
    include '../template/head.php';?>
    <link rel="stylesheet" href="<?= $host_name?>/assets/css/kinder.css">
    <body>
        <?php include '../template/header.php';?>

        <?php include '../template/banner.php';?>

        <div class="section py-20">
            <div class="w-9">
                <div class="grid grid-c3 apps">
                    
                    <?php include 'apps.php';?>

                    <div class="card p-20">
                        <div class="img">
                            <img src="<?= $host_name?>/assets/img/talk.jpg" alt="">
                        </div>
                        <div>
                            <h3>Talk and Comment</h3>
                            <div class="line my-10"></div>
                        </div>
                        <div class="links">
                            <a class="mt-10" href="https://play.google.com/store/apps/details?id=com.talkandcomment.android&hl=es" target="_blank">Descargar: Tablet o Android</a>
                            <p class="mt-10 paragraph">No esta disponible para ios</p>
                            <a class="my-10" href="https://chrome.google.com/webstore/detail/talk-and-comment-voice-no/djnhkfljnimcpelfndpcjcgngmefaobl?hl=es-419" target="_blank">Acceder desde Computadora</a>
                        </div>
                    </div><!--.card-->
                    <div class="card p-20">
                        <div class="img">
                            <img src="<?= $host_name?>/assets/img/bio.jpg" alt="">
                        </div>
                        <div>
                            <h3>Biodigital</h3>
                            <div class="line my-10"></div>
                        </div>
                        <div class="links">
                            <a class="mt-10" href="https://play.google.com/store/apps/details?id=com.biodigitalhuman.humanAndroid&hl=en" target="_blank">Descargar: Tablet o Android</a>
                            <a class="mt-10" href="https://www.google.com/url?q=https%3A%2F%2Fapps.apple.com%2Fus%2Fapp%2F3d-human-anatomy-disease%2Fid771825569&sa=D&sntz=1&usg=AFQjCNFsFWZJPXVHPVKalHxNE7aGb944BQ" target="_blank">Descargar: Ipad o Iphone</a>
                            <a class="my-10" href="https://www.google.com/url?q=https%3A%2F%2Fwww.biodigital.com%2F&sa=D&sntz=1&usg=AFQjCNFlcYYVSRiKnaWeRegnq-ytA4-iLA" target="_blank">Acceder desde Computadora</a>
                        </div>
                    </div><!--.card-->
                </div>
            </div>
        </div>

        <?php include '../template/footer.php';?>
        
        <script src="<?= $host_name?>/assets/js/aplications.js"></script>
    </body> 
</html>