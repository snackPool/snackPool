<?php include("sections/header_admin.php"); ?>
<?php include_once('sections/lateral_admin.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Selecciona el Producto</h1>
                <ol class="breadcrumb">
                    <li>
                       
                    </li>
                    
                   
                </ol>

                


<div class="barraScroll">
<table class="table table-border table-striped">
	<thead>

		<tr>
			<th>Nombre </th>
			<th> Costo</th>
			<th> Precio</th>
			<th></th>
					
		</tr>
	</thead>

	<tbody>

		<?php foreach($productos as $row){ ?><!--comandas es el array donde traigo los registros-->
		<tr>
			
			<td><?php echo $row['nombre']; ?> </td>
			<td><?php echo $row['costo']; ?></td>
			<td><?php echo $row['precio']; ?></td>
			<td><b><a style="color:green;" href="index.php/welcome/eliminandoProducto?idProducto=<?php echo $row['idProducto'] ?>">Eliminar</a></b></td>
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