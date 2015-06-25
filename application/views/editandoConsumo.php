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
                    
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Crear Comanda
                    </li>
                </ol>

                <!-- _____________________________INICIO MENU DE COMANDA_______________________________ -->

                <form action="index.php/welcome/updateConsumo" method="POST">
                <div class="col-lg-6">
                <!-- <fieldset disabled> -->

                    <h4 class="paddingtituloscomanda">Paquetes:</h4>                    
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
                    <br><br><br><br><br><br>
                            
                    <!-- <hr class="style-two"> -->

                    <h4 class="paddingtituloscomanda">Bebidas:</h4>
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

                    <br><br><br><br><br><br><br><br><br>

                    <h4 class="paddingtituloscomanda">Snacks:</h4>                                               
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

                    <br><br><br><br>
                <!-- </fieldset> -->
                </div>

                <div class="col-lg-6">
                    <h4 class="paddingtituloscomanda">Cervezas:</h4>
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

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <h4 class="paddingtituloscomanda">Comidas:</h4>                  
                    <div class="col-lg-4">
                        <label>Sushi:</label>
                        <input type="number" min=0 name="sushi" value="Sushi">     
                    </div>

                    <div class="col-lg-4">
                        <label>Pizza:</label>
                        <input type="number" min=0 name="pizza"  value="Pizza ">     
                    </div>
                    
                    <br><br><br><br>

                    <div class="derecha">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-default">Confirmar</button>
                        <input type="hidden" name="edita" value= <?php echo $idComanda?> >
                        
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