<?php include("sections/header_cajero.php"); ?>
<?php include("sections/lateral_cajero.php"); ?>
	<div class="logotipomenu" align="center">
		<br><br><br><br><br>
		<img src="img/logo/logo2.png">
		<br><br><br><br><br>

		<?php if(isset($msj) )
                        { echo 
                            "<script type='text/javascript'>
                                alert('".$msj."');
                            </script>";

                        } 

                    ?>
	</div>
<?php include("sections/footer_vistas.php"); ?>