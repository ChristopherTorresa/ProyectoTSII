<?php
    require_once "../modelo/InstitucionRepository.php";

    $obj = new InstitucionRepository();
    $lista = $obj->findById(2);
    echo '<pre>';
    var_dump($lista);
    echo '</pre>';

