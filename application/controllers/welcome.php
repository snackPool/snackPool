<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_snackpool');
	}

	public function index(){
		$this->load->view('indexP');
	}

	/********Logueo del Usuario*****************/
	public function logueo(){

		$this->load->view('logueo');
	}

	public function logueado(){

		$id=$this->session->userdata('idusuario');
			if(!empty( $id))
			{
				
		$this->load->view('menu_mesero');
			}

		else{
			$this->index();

			}


	}

	public function logueadoCajero(){
	
	$id=$this->session->userdata('idusuario');
			if(!empty( $id))
			{
				$this->load->view('menu_cajero');

			}

		else{
			$this->index();

			}
	}

	public function logueadoAdmin(){
	$id=$this->session->userdata('idusuario');

		if(!empty( $id))
	{
		$this->load->view('administradorMenu');
	}

	else{
			$this->index();

		}

	}



	function login()
	{
		$nombre = $this->input->post('user');
		$contraseña = $this->input->post('password');
		$res = $this->m_snackpool->validaUsuario($nombre,$contraseña);
		
		if(! empty($res))
		{

			$datos = array(
				'idusuario' => $res[0]['idEmpleado'],
				'nombre' => $res[0]['nombre'],
				'apellido' => $res[0]['apellido'],
				'contraseña' =>$res[0]['password'],
				'tipo' =>$res[0]['tipoUsuario']
				);

			$tipo=$datos['tipo'];
		
		$this->session->set_userdata($datos);

			if( $tipo =='mesero')
				{	$this->logueado();   }

				elseif ( $tipo=='cajero'or $tipo=='cajera') {
					
					$this->logueadoCajero();
			
					}

					else{
						$this->logueadoAdmin();
					}
		
		}
	
		else
		{
		
		$msg['mensaje']='Datos Incorrectos';
		$this->load->view('logueo',$msg);
		}
	}

	/************CrearComanda************************/

		public function alta_comanda(){
			
			$id=$this->session->userdata('idusuario');
			if(!empty( $id))
			{
				
				$this->load->view('alta_comanda');
			}

		else{
			$this->index();

			}
		}

		public function deslogueo(){
			$this->session->sess_destroy();
			$this->logueo();

		}

		public function llamada_mesas(){

			$id=$this->session->userdata('idusuario');
			if(!empty( $id))
			{
				//Cervezas
			$coronaE = $this->input->post('corona-extra');
			$corona =$this->input->post('corona');
			$victoria= $this->input->post('victoria');
			$pacifico= $this->input->post('pacifico-clara');
			$tecate_l = $this->input->post('tecate-l');
			$indio = $this->input->post('indio');
			$sol = $this->input->post('sol');
			$estrella = $this->input->post('estrella');
			$xx = $this->input->post('xx-l');
			$tecate = $this->input->post('tecate');
			$heineken = $this->input->post('heineken');
			$negra_m = $this->input->post('negra-m');
			$corona_l = $this->input->post('corona-l');
			$modelo = $this->input->post('modelo-l');
			$bohemia = $this->input->post('bohemia');

			$michelada = $this->input->post('michelada');
	   //Refrescos
			$coca = $this->input->post('coca');
			$fanta = $this->input->post('fanta');
			$sprite = $this->input->post('sprite');
			$manzana = $this->input->post('manzana');
			$agua = $this->input->post('agua');
			$te = $this->input->post('te');
			$calpico = $this->input->post('calpico');
       //Combos
			$pool = $this->input->post('Pool');
			$snack = $this->input->post('Snack');
			$pizzero = $this->input->post('Pizzero');
			$bbq = $this->input->post('BBQ');
			$snackp = $this->input->post('SnackPool');
	   //Snacks
			$alitas = $this->input->post('alitas');
			$nachos = $this->input->post('nachos');
			$palomitas = $this->input->post('palomitas');
			$sushi = $this->input->post('sushi');
			$pizza = $this->input->post('pizza');

			
			$id = $this->session->userdata('idusuario');
			$idComanda=$this->m_snackpool->insertaComanda($id);
			
 			if($coronaE>0){

 				$nomCoronaE='Cerveza Corona-Extra';
 				$this->m_snackpool->insertaConsumo($coronaE,$idComanda,$nomCoronaE);
		}

			if($corona>0){

 				$nomCorona='Cerveza Corona';
 				$this->m_snackpool->insertaConsumo($corona,$idComanda,$nomCorona);
		}

		if($victoria>0){

 				$nomVictoria='Cerveza Victoria';
 				$this->m_snackpool->insertaConsumo($victoria,$idComanda,$nomVictoria);
		}

		if($pacifico>0){

 				$nomPacifico='Cerveza Pacifico-Clara';
 				$this->m_snackpool->insertaConsumo($pacifico,$idComanda,$nomPacifico);
		}

		if($tecate_l>0){

 				$nomTecate_l='Cerveza Tecate';
 				$this->m_snackpool->insertaConsumo($tecate_l,$idComanda,$nomTecate_l);
		}

		if($indio>0){

 				$nomIndio='Cerveza Indio';
 				$this->m_snackpool->insertaConsumo($indio,$idComanda,$nomIndio);
		}

		if($sol>0){

 				$nomSol='Cerveza Sol';
 				$this->m_snackpool->insertaConsumo($sol,$idComanda,$nomSol);
		}

		if($estrella>0){

 				$nomEstrella='Cerveza Estrella';
 				$this->m_snackpool->insertaConsumo($estrella,$idComanda,$nomEstrella);
		}

		if($xx>0){

 				$nomXx='Cerveza XX-Light';
 				$this->m_snackpool->insertaConsumo($xx,$idComanda,$nomXx);
		}

		if($tecate>0){

 				$nomTecate='Cerveza Tecate';
 				$this->m_snackpool->insertaConsumo($tecate,$idComanda,$nomTecate);		}

		if($heineken>0){

 				$nomHeineken='Cerveza Heineken';
 				$this->m_snackpool->insertaConsumo($heineken,$idComanda,$nomHeineken);
		}

		if($negra_m>0){

 				$nomNegraM='Cerveza Negra-Modelo';
 				$this->m_snackpool->insertaConsumo($negra_m,$idComanda,$nomNegraM);
		}

		if($corona_l>0){

 				$nomCoronaL='Cerveza Corona-Light';
 				$this->m_snackpool->insertaConsumo($corona_l,$idComanda,$nomCoronaL);
		}

		if($modelo>0){

 				$nomModelo='Cerveza Modelo-Light';
 				$this->m_snackpool->insertaConsumo($modelo,$idComanda,$nomModelo);
		}
			 
		if($bohemia>0){

 				$nomBohemia='Cerveza Bohemia';
 				$this->m_snackpool->insertaConsumo($bohemia,$idComanda,$nomBohemia);
		}

		if($coca>0){

 				$nomCoca='CocaCola';
 				$this->m_snackpool->insertaConsumo($coca,$idComanda,$nomCoca);
		}

		if($sprite>0){

 				$nomSprite='Sprite';
 				$this->m_snackpool->insertaConsumo($sprite,$idComanda,$nomSprite);
		}

		if($manzana>0){

 				$nomManzana='Manzanita';
 				$this->m_snackpool->insertaConsumo($manzana,$idComanda,$nomManzana);
		}
			
		if($agua>0){

 				$nomAgua='Agua Natural';
 				$this->m_snackpool->insertaConsumo($agua,$idComanda,$nomAgua);
		}

		if($michelada>0){

 				$nomMichelada='Michelada';
 				$this->m_snackpool->insertaConsumo($michelada,$idComanda,$nomMichelada);
		}

		if($te>0){

 				$nomTe='Te';
 				$this->m_snackpool->insertaConsumo($te,$idComanda,$nomTe);
		}

		if($calpico>0){

 				$nomCalpico='Calpico';
 				$this->m_snackpool->insertaConsumo($calpico,$idComanda,$nomCalpico);
		}

		if($pool>0){

 				$nomPool='Pool';
 				$this->m_snackpool->insertaComandaPaquete($pool,$idComanda,$nomPool);
		}

		if($snack>0){

 				$nomSnack='Snack';
 				$this->m_snackpool->insertaComandaPaquete($snack,$idComanda,$nomSnack);
		}

		if($pizzero>0){

 				$nomPizzero='Pizzero';
 				$this->m_snackpool->insertaComandaPaquete($pizzero,$idComanda,$nomPizzero);
		}

		if($bbq>0){

 				$nomBBQ='BBQ';
 				$this->m_snackpool->insertaComandaPaquete($bbq,$idComanda,$nomBBQ);
		}

		if($snackp>0){

 				$nomSnackPool='SnackPool';
 				$this->m_snackpool->insertaComandaPaquete($snackp,$idComanda,$nomSnackPool);
		}

		if($alitas>0){

 				$nomAlitas='Alitas';
 				$this->m_snackpool->insertaConsumo($alitas,$idComanda,$nomAlitas);
		}

		if($nachos>0){

 				$nomNachos='Nachos';
 				$this->m_snackpool->insertaConsumo($nachos,$idComanda,$nomNachos);
		}

		if($palomitas>0){

 				$nomPalomitas='palomitas';
 				$this->m_snackpool->insertaConsumo($palomitas,$idComanda,$nomPalomitas);
		}

		if($sushi>0){

 				$nomSushi='Sushi';
 				$this->m_snackpool->insertaConsumo($sushi,$idComanda,$nomSushi);
		}

		if($pizza>0){

 				$nomPizza='Pizza';
 				$this->m_snackpool->insertaConsumo($pizza,$idComanda,$nomPizza);
		}

		
/*$resConsultaConsumo=$this->m_snackpool->consultaConsumo($idComanda);
	if(! empty($resConsultaConsumo)){$idComanda = array(
	'idComanda' => $resConsultaConsumo[0]['idComanda']);}*/

		$idComanda = array('idComanda' => $idComanda);
		$this->load->view('mesas',$idComanda);

				
			}

		else{
			$this->index();

			}
	
			
		
	}

	function insertaMesaComanda(){

		$idComanda = $this->input->post('comandas');

		$idMesa = $this->input->post('mesaID');


		$this->m_snackpool->insertaMesaComanda($idComanda,$idMesa);
		$idComanda = array('idComanda' => $idComanda);
		$this->load->view('mesas',$idComanda);
		

	}

	function insertaCuenta(){

		$idComanda = $this->input->post('comandas');
		$id = $this->session->userdata('idusuario');
		$this->m_snackpool->insertaCuenta($idComanda,$id);
		$this->load->view('menu_mesero');

	}

	

	/***************Consulta Comanda****************/

	function consultaComanda(){
	$idComanda=$this->input->get('idComanda');
	$id = $this->session->userdata('idusuario');
	$fecha =date("Y-m-d");

	$todoConsumo=$this->m_snackpool->consultaComanda($id,$fecha,$idComanda);
	$todoConsumo = array('comandas'=>$todoConsumo);
	$this->load->view('comandas_del_dia', $todoConsumo);
	}

	function editarConsumo(){

		$idComanda = $this->input->get('idComanda');
		$idComanda = array('idComanda'=>$idComanda);
		$this->load->view('editandoConsumo',$idComanda);
		

	}

	function muestraPaquete(){

		$idComanda = $this->input->get('idComanda');
		$paquetes=$this->m_snackpool->consultaPaqueteEdita($idComanda);
		$paquetes= array('paquetes' =>$paquetes);
		$this->load->view('paquetes',$paquetes);
	}

	function updateConsumo(){


			$idComanda=$this->input->post('edita');

			//Cervezas
			$coronaE = $this->input->post('corona-extra');
			$corona =$this->input->post('corona');
			$victoria= $this->input->post('victoria');
			$pacifico= $this->input->post('pacifico-clara');
			$tecate_l = $this->input->post('tecate-l');
			$indio = $this->input->post('indio');
			$sol = $this->input->post('sol');
			$estrella = $this->input->post('estrella');
			$xx = $this->input->post('xx-l');
			$tecate = $this->input->post('tecate');
			$heineken = $this->input->post('heineken');
			$negra_m = $this->input->post('negra-m');
			$corona_l = $this->input->post('corona-l');
			$modelo = $this->input->post('modelo-l');
			$bohemia = $this->input->post('bohemia');

			$michelada = $this->input->post('michelada');
	   //Refrescos
			$coca = $this->input->post('coca');
			$fanta = $this->input->post('fanta');
			$sprite = $this->input->post('sprite');
			$manzana = $this->input->post('manzana');
			$agua = $this->input->post('agua');
			$te = $this->input->post('te');
			$calpico = $this->input->post('calpico');
       //Combos
			$pool = $this->input->post('Pool');
			$snack = $this->input->post('Snack');
			$pizzero = $this->input->post('Pizzero');
			$bbq = $this->input->post('BBQ');
			$snackp = $this->input->post('SnackPool');
	   //Snacks
			$alitas = $this->input->post('alitas');
			$nachos = $this->input->post('nachos');
			$palomitas = $this->input->post('palomitas');
			$sushi = $this->input->post('sushi');
			$pizza = $this->input->post('pizza');

			
			
 			if($coronaE>0){

 				$nomCoronaE='Cerveza Corona-Extra';
 				$this->m_snackpool->insertaConsumo($coronaE,$idComanda,$nomCoronaE);
		}

			if($corona>0){

 				$nomCorona='Cerveza Corona';
 				$this->m_snackpool->insertaConsumo($corona,$idComanda,$nomCorona);
		}

		if($victoria>0){

 				$nomVictoria='Cerveza Victoria';
 				$this->m_snackpool->insertaConsumo($victoria,$idComanda,$nomVictoria);
		}

		if($pacifico>0){

 				$nomPacifico='Cerveza Pacifico-Clara';
 				$this->m_snackpool->insertaConsumo($pacifico,$idComanda,$nomPacifico);
		}

		if($tecate_l>0){

 				$nomTecate_l='Cerveza Tecate';
 				$this->m_snackpool->insertaConsumo($tecate_l,$idComanda,$nomTecate_l);
		}

		if($indio>0){

 				$nomIndio='Cerveza Indio';
 				$this->m_snackpool->insertaConsumo($indio,$idComanda,$nomIndio);
		}

		if($sol>0){

 				$nomSol='Cerveza Sol';
 				$this->m_snackpool->insertaConsumo($sol,$idComanda,$nomSol);
		}

		if($estrella>0){

 				$nomEstrella='Cerveza Estrella';
 				$this->m_snackpool->insertaConsumo($estrella,$idComanda,$nomEstrella);
		}

		if($xx>0){

 				$nomXx='Cerveza XX-Light';
 				$this->m_snackpool->insertaConsumo($xx,$idComanda,$nomXx);
		}

		if($tecate>0){

 				$nomTecate='Cerveza Tecate';
 				$this->m_snackpool->insertaConsumo($tecate,$idComanda,$nomTecate);		}

		if($heineken>0){

 				$nomHeineken='Cerveza Heineken';
 				$this->m_snackpool->insertaConsumo($heineken,$idComanda,$nomHeineken);
		}

		if($negra_m>0){

 				$nomNegraM='Cerveza Negra-Modelo';
 				$this->m_snackpool->insertaConsumo($negra_m,$idComanda,$nomNegraM);
		}

		if($corona_l>0){

 				$nomCoronaL='Cerveza Corona-Light';
 				$this->m_snackpool->insertaConsumo($corona_l,$idComanda,$nomCoronaL);
		}

		if($modelo>0){

 				$nomModelo='Cerveza Modelo-Light';
 				$this->m_snackpool->insertaConsumo($modelo,$idComanda,$nomModelo);
		}
			 
		if($bohemia>0){

 				$nomBohemia='Cerveza Bohemia';
 				$this->m_snackpool->insertaConsumo($bohemia,$idComanda,$nomBohemia);
		}

		if($coca>0){

 				$nomCoca='CocaCola';
 				$this->m_snackpool->insertaConsumo($coca,$idComanda,$nomCoca);
		}

		if($sprite>0){

 				$nomSprite='Sprite';
 				$this->m_snackpool->insertaConsumo($sprite,$idComanda,$nomSprite);
		}

		if($manzana>0){

 				$nomManzana='Manzanita';
 				$this->m_snackpool->insertaConsumo($manzana,$idComanda,$nomManzana);
		}
			
		if($agua>0){

 				$nomAgua='Agua Natural';
 				$this->m_snackpool->insertaConsumo($agua,$idComanda,$nomAgua);
		}

		if($michelada>0){

 				$nomMichelada='Michelada';
 				$this->m_snackpool->insertaConsumo($michelada,$idComanda,$nomMichelada);
		}

		if($te>0){

 				$nomTe='Te';
 				$this->m_snackpool->insertaConsumo($te,$idComanda,$nomTe);
		}

		if($calpico>0){

 				$nomCalpico='Calpico';
 				$this->m_snackpool->insertaConsumo($calpico,$idComanda,$nomCalpico);
		}

		if($pool>0){

 				$nomPool='Pool';
 				$this->m_snackpool->insertaComandaPaquete($pool,$idComanda,$nomPool);
		}

		if($snack>0){

 				$nomSnack='Snack';
 				$this->m_snackpool->insertaComandaPaquete($snack,$idComanda,$nomSnack);
		}

		if($pizzero>0){

 				$nomPizzero='Pizzero';
 				$this->m_snackpool->insertaComandaPaquete($pizzero,$idComanda,$nomPizzero);
		}

		if($bbq>0){

 				$nomBBQ='BBQ';
 				$this->m_snackpool->insertaComandaPaquete($bbq,$idComanda,$nomBBQ);
		}

		if($snackp>0){

 				$nomSnackPool='SnackPool';
 				$this->m_snackpool->insertaComandaPaquete($snackp,$idComanda,$nomSnackPool);
		}

		if($alitas>0){

 				$nomAlitas='Alitas';
 				$this->m_snackpool->insertaConsumo($alitas,$idComanda,$nomAlitas);
		}

		if($nachos>0){

 				$nomNachos='Nachos';
 				$this->m_snackpool->insertaConsumo($nachos,$idComanda,$nomNachos);
		}

		if($palomitas>0){

 				$nomPalomitas='palomitas';
 				$this->m_snackpool->insertaConsumo($palomitas,$idComanda,$nomPalomitas);
		}

		if($sushi>0){

 				$nomSushi='Sushi';
 				$this->m_snackpool->insertaConsumo($sushi,$idComanda,$nomSushi);
		}

		if($pizza>0){

 				$nomPizza='Pizza';
 				$this->m_snackpool->insertaConsumo($pizza,$idComanda,$nomPizza);
		}
		$id=$this->session->userdata('idusuario');
		$this->m_snackpool->updateCuenta($idComanda,$id);
		$this->load->view('menu_mesero');

	}
/**********************ElimininaComanda***********************/

	

	function eliminaComanda(){	

	$fecha = date("Y-m-d");

	$todasComandas=$this->m_snackpool->consultaComandaElimina($fecha);
	$todasComandas = array('comandas'=>$todasComandas);
	$this->load->view('eliminaComanda', $todasComandas);


	}

	function eliminacionLogica(){

		$idComanda = $this->input->get('idComanda');
		$this->m_snackpool->eliminacionLogica($idComanda);
		$this->load->view('administradorMenu');

	}

/************************Funciones del Admin********************/

	function insertaUsuario()
	{
		$this->load->view('crearUsuario_admin');
	}

	function addUsuario(){
		$nombre=$this->input->post('nombre');
		$apellido=$this->input->post('apellido');
		$username=$this->input->post('userName');
		$tipoUsuario=$this->input->post('tipoUsuario');
		$contraseña=$this->input->post('contraseña');
		$correo=$this->input->post('correo');
		$tel=$this->input->post('tel');
		$msj='Datos Registrados Correctamente';
		$msj=array('msj'=>$msj);
		$this->m_snackpool->insertaUsuario($nombre,$apellido,$username,$contraseña,$tipoUsuario,$correo,$tel);
		$this->load->view('crearUsuario_admin',$msj);
	}

	function insertaProducto()
	{
		$this->load->view('productos_admin');
	}

	function addProducto(){

		$nombre=$this->input->post('nombre');
		$cantidad=$this->input->post('cantidad');
		$costo=$this->input->post('costo');
		$precio=$this->input->post('precio');
		$msj='Datos Registrados Correctamente';
		$msj=array('msj'=>$msj);
		$this->m_snackpool->agregaProducto($nombre,$cantidad,$costo,$precio);

		$this->load->view('productos_admin',$msj);
	}

	function reporteVenta()
	{
		$this->load->view('reporteventas_admin');
	}

	function calculaVenta()
	{
		$fecha=$this->input->post('fecha');

		$fecha = str_replace('/', '-', $fecha);
		$fecha = date("Y-m-d", strtotime($fecha));
		
		
		$total=$this->m_snackpool->calculaReporte($fecha); 
		$total = array('total' => $total );
		$this->load->view('reporteventas_admin',$total);

	}

	function cuentasSPagar()
	{	
	$fecha=date("Y-m-d");
	$todasCuentas=$this->m_snackpool->consultaCuenta($fecha);
	$todasCuentas = array('cuentas'=>$todasCuentas);
	
	$this->load->view('cobrarCuenta_cajero', $todasCuentas);

	}

	function cobrandoCuenta(){

		$idComanda = $this->input->get('fkCuComanda');
		$this->m_snackpool->cobrandoCuenta($idComanda);
		$msj='La Cuenta Ahora Está Pagada';
		$msj=array('msj'=>$msj);
		$this->load->view('menu_cajero',$msj);

	}

	function probandoConsultaMesa(){
		$fecha=date("Y-m-d");
		$mesasConCuenta=$this->m_snackpool->consultaMesa($fecha);
		$mesasConCuenta= array('mesas' => $mesasConCuenta);
		$this->load->view('consumoXMesa',$mesasConCuenta);
	}

	function eliminaUsuario(){

		$usuarios=$this->m_snackpool->muestraUsuarios();
		$usuarios = array('usuarios' => $usuarios );
		$this->load->view('eliminaUsuario',$usuarios);

	}

	function eliminandoUsuario(){
		$idEmpleado=$this->input->get('idEmpleado');

		$this->m_snackpool->eliminandoUsuario($idEmpleado);
		$msj='El Usuario Ha Sido Eliminado Correctamente';
		$msj=array('msj'=>$msj);
		$this->load->view('administradorMenu',$msj);
	}


	function eliminaProducto(){

		$productos=$this->m_snackpool->muestraProducto();
		$productos = array('productos' => $productos );
		$this->load->view('eliminaProducto',$productos);


	}

	function eliminandoProducto(){
		$idProducto=$this->input->get('idProducto');
		$this->m_snackpool->eliminandoProducto($idProducto);
		$msj_P='El Producto Ha Sido Eliminado Correctamente';
		$msj_P=array('msj_P'=>$msj_P);
		$this->load->view('administradorMenu',$msj_P);
	}

	
}

