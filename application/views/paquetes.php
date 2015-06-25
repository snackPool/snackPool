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
                   
               
                </ol>
<div class="barraScroll">
<table class="table table-border table-striped">
	<thead>

		<tr>
			<th>Numero de la Comanda</th>
			<th>Nombre del Paquete </th>
			<th> Cantidad de Consumo </th>
			<th> Total de Consumo Paquete</th>
			<th></th>
					
		</tr>
	</thead>

	<tbody>

		<?php foreach($paquetes as $row){ ?><!--comandas es el array donde traigo los registros-->
		<tr>
			<td style="color:green;"><b><?php echo $row['idComanda']; ?></b></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['subtotal']; ?></td>
			<td><b><a style="color:green;" href="index.php/welcome/consultaComanda?idComanda=<?php echo $row['idComanda'] ?>">Regresar</a></b></td>
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