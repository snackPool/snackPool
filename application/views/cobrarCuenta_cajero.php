
<?php include("sections/header_cajero.php"); ?>
<?php include_once("sections/lateral_cajero.php"); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Cobrar Cuenta</h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-cutlery"></i>  <a href="index.php/welcome/cobrar_cuenta">Cuentas P/Cobrar</a>
                    </li>
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Cobrar Cuenta
                    </li>
                </ol>

                <!-- _____________________________INICIO COBRAR CUENTA_______________________________ -->

                <div class="barraScroll">
<table class="table table-border table-striped">
    <thead>

        <tr>
            <th>Numero de la Comanda</th> <!--th es para columnas y tr para filas, td es para columnas de las cuerpo-->
            <th>Nombre del Empleado </th>
            <th>Total del Consumo</th>
            <th>Estado de Cuenta </th>
            <th></th>
            
            
                    
        </tr>
    </thead>

    <tbody>

        <?php foreach($cuentas as $row){ ?><!--comandas es el array donde traigo los registros-->
        <tr>
            <td style="color:green;"><b><?php echo $row['fkCuComanda']; ?></b></td>
            <td><?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['estadoDeCuenta']; ?></td>
            <td><b><a style="color:green;" href="index.php/welcome/ticketConsumo?fkCuComanda=<?php echo $row['fkCuComanda'] ?>">Generar Ticket</a></b></td>
            <td><b><a style="color:green;" href="index.php/welcome/cobrandoCuenta?fkCuComanda=<?php echo $row['fkCuComanda'] ?>">Cobrar</a></b></td>
        </tr>
        <?php } ?>
    </tbody>

</table>


                <!-- _____________________________FIN COBRAR CUENTA_______________________________ -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include("sections/footer_vistas.php"); ?>