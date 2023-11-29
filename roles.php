<?php
include("include/conexion.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php 
    // Lenguaje en php
    include("include/menu.php");

    ?>

    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <?php include("include/modal_frm_reg_roles.php"); ?>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                            <th>Nro</th>
                                            <th>nombre</th>
                                        

                                    </thead>
                                    <tbody>
                                        <?php
                                           
                                            $consulta = "SELECT * FROM producto";
                                            $ejecutar = mysqli_query($conexion, $consulta);
                                            $contador=0;
                                           
                                            while ($respuesta= mysqli_fetch_array($ejecutar)) {
                                                $contador ++;
                                                echo "<tr>";
                                                echo "<td>".$contador."</td>";
                                                echo "<td>".$respuesta['nombre']."</td>";
                                                
                                                echo "<td><button class='btn btn-success'>Editar</button> <button class='btn btn-danger'>Eliminar</button></td>";
  
                                                echo "</tr>";
                                            }

                                        ?>
                                    </tbody>
                                      </table>
                        
                               

                                
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- FIN DE CONTENIDO -->


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>