<?php include("sections/header_admin.php"); ?>
<?php include_once('sections/lateral_admin.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Selecciona el Usuario</h1>
                <ol class="breadcrumb">
                    <li>
                       
                    </li>
                    
                   
                </ol>

                


<div class="barraScroll">
<table class="table table-border table-striped">
	<thead>

		<tr>
			<th>Nombre </th>
			<th> Apellido </th>
			<th> Nombre de Usuario </th>
			<th> Tipo de Usuario </th>
			<th> Correo </th>
			<th> Telefono </th>
			<th></th>
					
		</tr>
	</thead>

	<tbody>

		<?php foreach($usuarios as $row){ ?><!--comandas es el array donde traigo los registros-->
		<tr>
			
			<td><?php echo $row['nombre']; ?> </td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['nomUsuario']; ?></td>
			<td><?php echo $row['tipoUsuario']; ?></td>
			<td><?php echo $row['correo']; ?></td>
			<td><?php echo $row['telefono']; ?></td>
			<td><b><a style="color:green;" href="index.php/welcome/eliminandoUsuario?idEmpleado=<?php echo $row['idEmpleado'] ?>">Eliminar</a></b></td>
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