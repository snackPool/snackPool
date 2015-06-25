
<?php include("sections/header_admin.php"); ?>

<?php include("sections/lateral_admin.php"); ?>



<!-- Comienza el contenido de la pagina -->
        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="menuderechaadmin">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Agregar productos
                        </h1>
                        <ol class="breadcrumb">
                        <!--    <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>-->
                            <li class="active">
                                <i class="glyphicon glyphicon-shopping-cart"></i> agregar producto
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form role="form"  action="index.php/welcome/addProducto" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php if(isset($msj) )
                                    { echo 
                                        "<script type='text/javascript'>
                                            alert('".$msj."');
                                        </script>";

                                    } 

                                ?>
                                <div class="form-group">
                                    <label>Nombre del producto</label>
                                    <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre" required>
                                </div>

                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control" placeholder="Cantidad de productos " name="cantidad" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Costo</label>
                                    <input type="text"class="form-control" placeholder="Costo del producto" name="costo" required>
                                </div>  
                                
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="text" class="form-control" placeholder="Precio del producto" name="precio" required>
                                </div>          
                                <button type="submit" class="btn btn-default">Agregar Producto</button> 
                            </div>
                        </div>
                </form>
                <a href="index.php/welcome/logueadoAdmin" class="btn btn-default" type="button" style="padding-top: 5px; margin-top:3px;
                margin-left: 15px;">Salir al Menu</a>
            </div>
           
         
<?php include("sections/footer_vistas.php"); ?>
