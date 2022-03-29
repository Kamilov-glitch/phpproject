<?php

    define("INC_DIR", $_SERVER["DOCUMENT_ROOT"]. "/phpproject/includes/");

    //Auto Load Classes
    include INC_DIR.'loadclasses.php';
    
    //Include Debugging Code
    // currently commented beacuse i prepended this on php.ini config file
    // include INC_DIR.'debugging.php';