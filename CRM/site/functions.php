<?php
    
    function example($neum) {
        echo "hi $neum";
    };
     
    if (isset($_GET["name"]) and isset($_GET["age"])){
        $name = $_GET["name"];
        $age = $_GET["age"];
        echo "Name $name <br>";
        echo "Age $age <br>";
        example($_GET["name"]); 
    }

    

    
    ?>