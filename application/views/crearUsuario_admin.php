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
                            Crear usuario
                        </h1>
                        <ol class="breadcrumb">
                        <!--    <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>-->
                            <li class="active">
                                <i class="glyphicon glyphicon-user"></i> Crear usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
        <form  action="index.php/welcome/addUsuario" method="POST">
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
                            <label>Nombre</label>
                            <input class="form-control" placeholder="Primer nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input class="form-control" placeholder="Nombre usuario " name="userName" required>
                        </div>
               
                        <div class="form-group">
                            <label>Tipo de usuario</label>
                            <input  class="form-control" placeholder="Cajero, mesero, ..." name="tipoUsuario" required>
                        </div>  
                
                        <div class="form-group">
                            <label>Telefono</label>
                            <input class="form-control" placeholder="(312) 000 0000" name="tel" required>
                        </div>          
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input class="form-control" placeholder="Primer apellido" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="***********" name="contraseña" required>
                        </div>
                        <div class="form-group">
                            <label>Correo electronico</label>
                            <input class="form-control" placeholder="usuario@cuenta.com" name="correo" required>
                        </div><br/> 
                        <button type="submit" class="btn btn-default">Crear usuario</button>    
                    </div>
                </div>
        </form>

            <a href="index.php/welcome/logueadoAdmin" class="btn btn-default" type="button" style="padding-top: 5px; margin-top:3px;
            margin-left: 15px;">Salir al Menu</a>

                    </div>
                </div>
                <!-- /.row -->

<?php include("sections/footer_vistas.php"); ?>