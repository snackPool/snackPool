

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
                        <i class="fa fa-cutlery"></i>  <a href="index_mesero.php">Menú</a>
                    </li>
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Crear Menú
                    </li>
                </ol>
                
                <!-- _________________________INICIO DISTRIBUCION SNACK POOL___________________________ -->

                <div class="col-lg-6">
                    
                    <table>
                        <tr>
                            <td rowspan="5">
                            <table>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" >
                                            <input type=image src="img/botones/entrada.jpg" width="55" height="35" >
                    
                                        </form>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/13periquera.jpg" width="60" height="50" name="mesa" id="18" value="18" >
                                            <input type="hidden" value="18" name="mesaID">
                                            <input type="hidden" value=<?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/12periquera.jpg" width="60" height="50" name="mesa" value="17" id="17" >
                                            <input type="hidden" value="17" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/11periquera.jpg" width="60" height="50" name="mesa" value="16" id="16" >
                                            <input type="hidden" value="16" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/10periquera.jpg" width="60" height="50" name="mesa" id="15" value="15">
                                            <input type="hidden" value="15" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/9periquera.jpg" width="60" height="50" name="mesa" id="14" value="14">
                                            <input type="hidden" value="14" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/8periquera.jpg" width="60" height="50" name="mesa" id="13" value="13" >
                                            <input type="hidden" value="13" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/7periquera.jpg" width="60" height="50" name="mesa" id="12" value="12">
                                            <input type="hidden" value="12" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                            <input type=image src="img/botones/6periquera.jpg" width="60" height="50" name="mesa" id="11" value="11">
                                            <input type="hidden" value="11" name="mesaID">
                                            <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/2billar.jpg" width="145" height="85" name="mesa" id="2" value="2">
                                    <input type="hidden" value="2" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas" >
                                </form>
                            </td>
                            <td colspan="2">
                                <form class="izquierda" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/1billar.jpg" width="85" height="145" name="mesa" id="1" value="1" >
                                    <input type="hidden" value="1" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <form class="espacioizquierda" class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/5billar.jpg" width="85" height="145" name="mesa" id="5" value="5" >
                                    <input type="hidden" value="5" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas" >
                                </form>
                            </td>
                            <td colspan="2">
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/4billar.jpg" width="85" height="145" name="mesa" id="4" value="4" >
                                    <input type="hidden" value="4" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas" >
                                </form>
                            </td>
                            <td >
                                <form class="izquierda" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/3billar.jpg" width="85" height="145" name="mesa" id="3" value="3" >
                                    <input type="hidden" value="3" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                </form>
                            </td>   
                        </tr>

                        <tr>
                            <td>
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/3normal.jpg" width="60" height="105" name="mesa" id="8" value="8">
                                    <input type="hidden" value="8" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas" >
                                </form>
                            </td>
                            <td>
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/2normal.jpg" width="60" height="105" name="mesa" id="7" value="7" >
                                    <input type="hidden" value="7" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                </form>
                            </td>
                            <td>
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/1normal.jpg" width="60" height="105" name="mesa" id="6" value="6">
                                    <input type="hidden" value="6" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?> name="comandas">
                                </form>
                            </td>

                            <td rowspan="2">
                                <form class="centrar" method="post" action="index.php/welcome/insertaCuenta">
                                    <input type=image src="img/botones/logo.jpg" width="150" height="150">
                                    <input type="hidden" name="comandas" value= <?php echo $idComanda?> >
                                </form>
                            </td>
                        </tr>   

                        <tr>
                            <td colspan="2">
                                <form class="centrar" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/5normal.jpg" width="105" height="55" name="mesa" id="10" value="10" >
                                    <input type="hidden" value="10" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?>  name="comandas">
                                </form>
                            </td>
                            <td>
                                <form class="espacioderecha" class="izquierda" method="post" action="index.php/welcome/insertaMesaComanda">
                                    <input type=image src="img/botones/4normal.jpg" width="105" height="55" name="mesa" id="9" value="9" >
                                    <input type="hidden" value="9" name="mesaID">
                                    <input type="hidden" value= <?php echo $idComanda?>  name="comandas">
                                </form>
                            </td>

                        </tr>
                    </table>
                   

                </div>

                <!-- _________________________FIN DISTRIBUCION SNACK POOL___________________________ -->

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<?php include("sections/footer_vistas.php"); ?>  
