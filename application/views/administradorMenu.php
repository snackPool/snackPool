<?php include("sections/header_admin.php"); ?>
<?php include_once('sections/lateral_admin.php'); ?>

<div class="logotipomenu" align="center">
		<br><br><br><br><br>
		<img src="img/logo/logo2.png">
		<br><br><br><br><br>
	</div>
	 <?php if(isset($msj) )
                        { echo 
                            "<script type='text/javascript'>
                                alert('".$msj."');
                            </script>";

                        } 

                    ?>
     <?php if(isset($msj_P) )
                        { echo 
                            "<script type='text/javascript'>
                                alert('".$msj_P."');
                            </script>";

                        } 

                    ?>
<?php include("sections/footer_vistas.php"); ?>
