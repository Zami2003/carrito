<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css">
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

<body>
<?php 
//lenguaje php
include("include/menu.php");
?>

<!-- Inicio de contenido -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                    <h4>FORMULARIO  DE VENTAS</h4>
                    <div class="card">
                        <div class="card-body">
                          <form action="operaciones/registrar_usuario.php"method="POST">
                          

                           <div class="form-group row">
                               <label class="col-lg-2 col-md-2 col-md-12">CANTIDAD:</label>
                               <input type="number" name="dnitrab" placeholder="Ingrese numero de venta" class="form-control col-lg-8 col-md-10 col-sm-12 required">
                           </div>
                           
                           
                           <div class="form-group row">
                               <label class="col-lg-2 col-md-2 col-md-12">DESCUENTOS:</label>
                               <input type="text" name="fechana" placeholder="" class="form-control col-lg-4 col-md-4 col-sm-12 required">
                           </div>


                           <div class="form-group row">
                               <label class="col-lg-2 col-md-2 col-md-12">IMPORTE:</label>
                               <input type="number" name="fechana" placeholder="" class="form-control col-lg-4 col-md-4 col-sm-12 required">
                           </div>

                           <div class="form-group row">
                           <label class="col-lg-3 col-md-3 col-md-12"></label>
                               <button type="submite" class="btn btn-primary">Guardar</button>
                           </di>
                         </form> 

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin de contenido -->


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
