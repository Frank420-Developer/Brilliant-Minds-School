<div class="info-seccion mb-20 pb-20">
    <div class="titulo py-20">
        <h2><?php
        if(isset($subsubtitle)){
            echo $subsubtitle;
        }else if(isset($subtitle)){
            echo $subtitle;
        }else{
            echo $title;
        }
        ?></h2>
    </div>
    <div class="direccion py-20 flex-justify-center w-100">
        <?php  
        
            if(isset($subtitle) && isset($subsubtitle)){
                $primerSub = str_replace(" ","-",$subtitle);
                
                echo "<h4 style='width: 350px; justify-content: space-between' class='flex'>";
                echo "<a href='" .$host_name."/index.php'> Home</a>  <span> /</span>";
                echo "<a href='".$host_name."/". strtolower($title).".php'>".$title."</a><span mr-10>  /</span>";
                echo "<span>" . $subtitle." /</span>";
                echo "<span> ".$subsubtitle." </span>";
            }
            else if(isset($subtitle)){
                echo "<h4 style='width: 350px; justify-content: space-between' class='flex'>";
                echo "<a href='" .$host_name."/index.php'> Home</a>  <span> /</span>";
                echo "<a href='".$host_name."/".strtolower($title).".php'>". $title."</a><span mr-10>  /</span>";
                echo "<span> ".$subtitle." </span>";
            }
            else{
                echo "<h4 style='width: 180px; justify-content: space-between' class='flex'>";
                echo "<a href='" .$host_name."/index.php'> Home</a>  <span> /</span>";
                echo "<span>". $title ." </span>";
            }
        ?>
        </h4>
    </div>
</div><!--.info-seccion-->