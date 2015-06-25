<head>	
	<meta charset="UTF-8">
	<title>Login</title>

	<base href="<?php echo base_url(); ?>"></base>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">
	
	</script>
<style type="text/css">
	#loginButton{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
				}

	.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;	
	height: auto;
	background-image: url(img/fondologin.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

	#loginButton:hover{
	opacity: 0.8;
	}
	#loginButton:active{
	opacity: 0.6;
	}
	#loginButton:focus{
	outline: none;
	}</style>

</head>
<body> 

	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><b>Snack<span>Pool</span></b></div>
		</div>
		<br>
		<div class="login">
		<form action="index.php/welcome/login" method="post" id="formulario">
				<input id="user" type="text" placeholder="Usuario" name="user"><br>
				<input id="password" type="password" placeholder="Contraseña" name="password"><br>
				<input type="submit" value="Login" id="loginButton">
				<input type="button" value="Regresar" id="loginButton"  onclick='location="../snackPool"'>
		</form>
		</div>
   <?php  
    
    if(isSet($mensaje))
    {
    echo "<script>alert('$mensaje');</script>";
    }
   
  ?> 
    
</body>

<?php include("sections/footer.php"); ?>
