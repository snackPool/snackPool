<?php include("sections/header_m.php"); ?>
<?php include_once('sections/lateral.php'); ?>


<div id="page-wrapper">

    <div class="container-fluid">

    
        <div class="menuderecha">
            <div class="col-lg-12">
                <h1 class="page-header">Selecciona la Mesa</h1>
                <ol class="breadcrumb">
                    
                    <li class="active">
                        <i class="fa fa-bars"></i> Crear Comanda
                    </li>
                </ol>
<div class="barraScroll">
<table class="table table-border table-striped">
    <thead>

        <tr>
            <th>Mesa</th> 
            <th></th>
            <th>Estado de Cuenta</th>
            <th></th>
                    
        </tr>
    </thead>

    <tbody>

        <?php foreach($mesas as $row){ ?>
        <tr>
            
            <td><?php echo $row['fkMeMesa']; ?></td>
            <td><img src="img/Mesa.jpg" style="width:100px; height:50px; "> </td>
            <td><?php echo $row['estadoDeCuenta']; ?></td>
            <td><b><a style="color:green;" href="index.php/welcome/consultaComanda?idComanda=<?php echo $row['idComanda'] ?>">Seleccionar Consumo</a></b></td>
            
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