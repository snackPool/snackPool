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
<div class="barraScroll">
<table class="table table-border table-striped">
	<thead>

		<tr>
			<th>Numero de la Comanda</th> <!--th es para columnas y tr para filas, td es para columnas de las cuerpo-->
			<th>Nombre del Empleado </th>
			<th> Fecha de Elaboracion </th>
			<th> Hora de Elaboracion </th>
			<th>Nombre del Producto </th>
			<th> Cantidad de Consumo </th>
			<th> Total de Consumo Productos </th>
			<!--<th>Nombre del paquete </th>
			<th> Cantidad de Paquetes </th>
			<th>Precio del Paquete </th>-->
			<th></th>
			<th></th>
					
		</tr>
	</thead>

	<tbody>

		<?php foreach($comandas as $row){ ?><!--comandas es el array donde traigo los registros-->
		<tr>
			<td style="color:green;"><b><?php echo $row['idComanda']; ?></b></td>
			<td><?php echo $row['nombreEmpleado']; ?><!--<img src="img/botones/10periquera.jpg">--> </td>
			<td><?php echo $row['fecha']; ?></td>
			<td><?php echo $row['hora']; ?></td>
			<td><?php echo $row['nombreProducto']; ?></td>
			<td><?php echo $row['cantidadConsumo']; ?></td>
			<td><?php echo $row['subtotal']; ?></td>
			<!--<td><?php //echo $row['nomPaquete']; ?></td>-->
			<!--<td><?php //echo $row['cantidadPaquete']; ?></td>-->
			<!--<td><?php //echo $row['precioPaquete']; ?></td>-->
			<td><b><a style="color:green;" href="index.php/welcome/editarConsumo?idComanda=<?php echo $row['idComanda'] ?>">Editar</a></b></td>
			<td><b><a style="color:green;" href="index.php/welcome/muestraPaquete?idComanda=<?php echo $row['idComanda'] ?>">Mostrar Paquetes</a></b></td>
		</tr>
		<?php } ?>
	</tbody>

</table>

</div>
   </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<?php include("sections/footer_vistas.php"); ?>