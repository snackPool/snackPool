<!-- <?php //session_start(); // Iniciando sesión
     /* if(! isSet($_SESSION['logueado']) ){
        header('Location: http://localhost/login.php');
    } */ ?> -->


<?php include("sections/header_m.php"); ?>
<?php include_once('sections/lateral.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Selecciona la orden</h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-cutlery"></i>  <a href="index.php/welcome/alta_comanda">Comanda</a>
                    </li>
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Crear Comanda
                    </li>
                </ol>

                <!-- _____________________________INICIO MENU DE COMANDA_______________________________ -->

                <form action="index.php/welcome/llamada_mesas" method="POST">

                <div class="barraScroll">

                    <div class="col-sm-6">
                        
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h4 class="panel-title">Paquetes:</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <label>Pool:</label>
                                    <input type="number" min=0 name="Pool">

                                    <label>Snack:</label>
                                    <input type="number" min=0 name="Snack">
                                </div>
                                
                                <div class="col-lg-4">
                                    <label>Pizzero:</label>
                                    <input type="number" min=0 name="Pizzero">

                                    <label>BBQ:</label>
                                    <input type="number" min=0 name="BBQ">
                                </div>

                                <div class="col-lg-4">
                                    <label>SnackPool:</label>
                                    <input type="number" min=0 name="SnackPool">
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h4 class="panel-title">Cervezas:</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <label>Corona Extra:</label>
                                    <input type="number" min=0 name="corona-extra">

                                    <label>Victoria:</label>
                                    <input type="number" min=0 name="victoria">
                                            
                                    <label>Pacifico Clara:</label>
                                    <input type="number" min=0 name="pacifico-clara">  

                                    <label>Tecate Ligth:</label>
                                    <input type="number" min=0 name="tecate-l">
                                            
                                    <label>Indio:</label>
                                    <input type="number" min=0 name="indio">
                                </div>

                                <div class="col-lg-4">
                                    <label>Sol:</label></br>
                                    <input type="number" min=0 name="sol">
                                          
                                    <label>XX-Ligth:</label>
                                    <input type="number" min=0 name="xx-l">
                                           
                                    <label>Tecate:</label>
                                    <input type="number" min=0 name="tecate">
                                            
                                    <label>Heineken:</label>
                                    <input type="number" min=0 name="heineken">

                                    <label>Corona:</label>
                                    <input type="number" min=0 name="corona">
                                </div>
                                            
                                
                                <div class="col-lg-4">
                                    <label>Negra Modelo:</label>
                                    <input type="number" min=0 name="negra-m">
                                           
                                    <label>Corona Ligth:</label>
                                    <input type="number" min=0 name="corona-l">
                                           
                                    <label>Modelo Ligth:</label>
                                    <input type="number" min=0 name="modelo-l">
                                           
                                    <label>Bohemia:</label>
                                    <input type="number" min=0 name="bohemia">

                                    <label>Estrella:</label>
                                    <input type="number" min=0 name="estrella"> 
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-6">

                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h4 class="panel-title">Snacks:</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <label>Alitas:</label>
                                    <input type="number" min=0 name="alitas" value="Alitas">                                
                                </div>

                                <div class="col-lg-4">
                                    <label>Nachos c/queso:</label>
                                    <input type="number" min=0 name="nachos" value="Nachos">     
                                </div>

                                <div class="col-lg-4">
                                    <label>Palomitas:</label>
                                    <input type="number" min=0 name="palomitas" value="Palomitas">                              
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h4 class="panel-title">Bebidas:</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <label>Coca-Cola:</label>
                                    <input type="number" min=0 name="coca">
                                            
                                    <label>Fanta:</label>
                                    <input type="number" min=0 name="fanta">
                                            
                                    <label>Sprite:</label>
                                    <input type="number" min=0 name="sprite">           
                                </div>

                                <div class="col-lg-4">
                                    <label>Manzanita:</label>
                                    <input type="number" min=0 name="manzana">
                                           
                                    <label>Agua Natural:</label>
                                    <input type="number" min=0 name="agua">
                                            
                                    <label>Michelada:</label>
                                    <input type="number" min=0 name="michelada">
                                </div>

                                <div class="col-lg-4">
                                    <label>Té:</label>
                                    <input type="number" min=0 name="te" >
                                            
                                    <label>Calpico:</label>
                                    <input type="number" min=0 name="calpico" >  
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h4 class="panel-title">Comidas:</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <label>Sushi:</label>
                                    <input type="number" min=0 name="sushi" value="Sushi">     
                                </div>

                                <div class="col-lg-4">
                                    <label>Pizza:</label>
                                    <input type="number" min=0 name="pizza"  value="Pizza ">     
                                </div>
                            </div>
                        </div>                
                        
                        <div class="derecha">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-default">Confirmar</button>
                        </div>
                        
                        <br><br><br><br><br><br><br>

                    </div>

                </div>

                </form>

                <!-- _____________________________FIN MENU DE COMANDA_______________________________ -->

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include("sections/footer_vistas.php"); ?>