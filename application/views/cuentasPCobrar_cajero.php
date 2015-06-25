
<?php include("sections/header_cajero.php"); ?>
<?php include_once('sections/lateral_cajero.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Ver Cuentas P/Cobrar</h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-cutlery"></i>  <a href="index.php/welcome/cuentas_p_cobrar">Cuentas P/Cobrar</a>
                    </li>
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Ver Cuentas P/Cobrar
                    </li>
                </ol>

                <!-- _____________________________INICIO CUENTAS POR COBRAR_______________________________ -->

                <form action="index.php/welcome/cuentas_p_cobrar" method="POST">
                	<div class="centrar" class="col-lg-6">
	                	<table>
	                		<tr>
		                		<div class="radio">
									<input type="radio" name="optradio">Aquí se verá la cuenta a cobrar y se seleccionará con el radiobox
								</div>
	                		</tr>
	                	</table>
	                	<div class="derecha">
                			<button type="submit" class="btn btn-default">Ver cuenta</button>
                		</div>
                	</div>
                </form>

                <!-- _____________________________FIN CUENTAS POR COBRAR_______________________________ -->

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include("sections/footer_vistas.php"); ?>