<?php include("sections/header_admin.php"); ?>
<?php include_once('sections/lateral_admin.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Selecciona la orden</h1>
                <ol class="breadcrumb">
                   
                   
                </ol>
<div class="barraScroll">
<table class="table table-border table-striped">
	<thead>

		<tr>
			<th>Numero de la Comanda</th> <!--th es para columnas y tr para filas, td es para columnas de las cuerpo-->
			<th>Nombre del Empleado </th>
			<th> Fecha de Elaboracion </th>
			<th> Hora de Elaboracion </th>
			<th> Total de Consumo</th>
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
			<td><?php echo $row['total']; ?></td>
			<td><b><a style="color:green;" href="index.php/welcome/eliminacionLogica?idComanda=<?php echo $row['idComanda'] ?>">Eliminar</a></b></td>
			
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