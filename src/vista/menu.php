<?php

switch($_SESSION['tipo']){
    case 1://Admin Instituciones
        ?>
        <li><a id="adm_empleado" href='emp_mant.php' target="principal" >Administrar  </a><br></li>
        <li><a id="adm_paciente" href='pac_mant.php' target="principal" >Administrar  </a><br></li>
        <?php
        break;
    case 2://Alumno
        ?>
        <li><a href='.php' target="principal">Consultar Compras</a><br></li>
        <li><a href='lista_cita_pac.php' target="principal">Consultar Citas</a><br></li>
        <li><a href='medicamento_buscar.php' target="principal">Buscar Medicamento</a><br></li>
        <?php
       break;
}
?>

