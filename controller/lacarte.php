<?php
    echo renderHeader("carte.css");

    $bdd = connectBDD();
    
    echo renderLacarte($bdd);
    echo renderFooter();
?>