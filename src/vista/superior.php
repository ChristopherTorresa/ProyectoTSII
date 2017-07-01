<?php include 'head.html'; ?>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">SIPU</a>
        </div>
        <div class="navbar-collapse collapse">
            <form action="sesion_cerrar.php" class="navbar-form navbar-right">
                <input type="submit" class="form-control" value="Cerrar Session">
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">
<!--                        --><?php
//
//                            foreach ($_SESSION["usuario"] as $campo)
//                            {
//                                echo $campo["apellido_paterno"] . " " . $campo["apellido_materno"] . ", " . $campo["nombre"];
//                            }
//                        ?>
                    </a></li>

            </ul>

        </div>
    </div>
</div>