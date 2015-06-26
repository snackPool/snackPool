

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="row"> -->
        <div class="menuderecha">
            <div class="col-lg-12">
               

<style type="text/css" media="print">
#Imprime {
	height: auto;
	width: 310px;
	margin: 0px;
	padding: 0px;
	float: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 7px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	
	color: #000;
}
@page{
   margin: 0;
}
</style>

<div id="Imprime">
    <?php 
		date_default_timezone_set("America/Chihuahua"); 
		$fecha = date("Y/m/d H:i:s"); 
		$totalV = 0;
		$totalCosto =0;
	    $totalImporte=0;
		
	?>

    <h2 style="">--------------------------------</h2>
    <h1 style="margin-left: 35px;">SnackPool</h1>
    <h2>--------------------------------</h2><br>
   	Bar & Snacks   &nbsp;&nbsp;&nbsp;
    Fecha : <?php echo $fecha ?><br>
    Número de Comanda: <?php  echo $datosGenerales[0]['idComanda']?><br>
    Nombre Mesero : <?php  echo $datosGenerales[0]['nombre'].$datosGenerales[0]['apellido']?><br>
    Direccion: Paseo Miguel de la Madrid Hurtado #152<br>
    col. Residencial Esmeralda <br>
    Tel: 3120000<br>
    RFC: DISS930414F85
    <br>
    <br>
    <table width="200" border="1" >

	<thead>

		<tr>
			
			<th>Nombre del Producto </th>
			<th> Cantidad de Consumo </th>
			<th> Precio </th>
			<th> Total de Consumo Productos </th>
		</tr>
	</thead>

	<tbody>

		<?php foreach($ticketConsumo as $row){ ?>
		<tr>
			<td><?php echo $row['nomPro']; ?></td>
			<td><?php echo $row['cantidadConsumo']; ?></td>
			<td><?php echo $row['prePro']; ?></td>
			<td><?php echo $row['conSub']; ?></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>

<br>
<br>

<table width="200" border="1" style="margin-left:20px;">

	<thead>

		<tr>
			
	
			<th>Nombre del paquete </th>
			<th> Cantidad de Paquetes </th>
			<th>Precio del Paquete </th>
			<th> Precio </th>
						
		</tr>
	</thead>

	<tbody>

		<?php foreach($ticketPaquete as $rows){ ?>
		<tr>
	
			<td><?php echo $rows['nomPaq']; ?></td>
			<td><?php echo $rows['canPaq']; ?></td>
			<td><?php echo $rows['prePaq']; ?></td>
			<td><?php echo $rows['subPaq']; ?></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>

  <br>
  <br>
  Total: <?php  echo $datosGenerales[0]['total']?><br>
    </div>


    <p><i class="fa fa-print"></i><a href="javascript:imprSelec('Imprime')" ></a></p>
                

   </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<?php include("sections/footer_vistas.php"); ?>