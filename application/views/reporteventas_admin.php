<?php include("sections/header_admin.php"); ?>

<?php include("sections/lateral_admin.php"); ?>


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="menuderechaadmin">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reporte de ventas</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-fw fa-bar-chart-o"></i> Reporte de ventas del dia
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
        			<div class="form-group">
                		<h3>Reporte del dia</h3><br />
            			<label>Selecciona la fecha</label><br />
            			<!-- El atributo type del input solo funciona en chrome
            			Firefox no soporta algunos tipos del HTML5 -->
            			<form action="index.php/welcome/calculaVenta" method="POST">          
                            <input type="date" style="width:200px;" name="fecha"
                		       	class="form-control" placeholder="dd/mm/aaaa">
                                <!-- </div> -->
            		        <button type="submit" class="btn btn-default">Mostrar</button>
                        </form>
                    </div><br>

                    <?php if( isset($total)){ ?>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><b>Total:</b></h4>
                                            </div>
                                            <div class="panel-body">
                                                <?php foreach($total as $row){ ?>
                                                    <h4><b>$<?php echo $row['total']; ?></b></h4>
                                                <?php } ?>
                                            </div>
                                        </div>                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>

            </div>

        </div>
         <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include("sections/footer_vistas.php"); ?>