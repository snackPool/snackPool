<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_snackpool extends CI_Model
{

	function __construct(){
		parent::__construct();
	}
/********Logueo del Usuario*****************/
	function validaUsuario($nombre,$contraseña){

		$this->db->where('nomUsuario',$nombre);
		$this->db->where('password',$contraseña);
		$query = $this->db->get('empleado');

		return $query->result_array();
	}

/************CrearComanda************************/

	function insertaComanda($idUser)
	{
		$this->db->set('fkCoEmpleado',$idUser);
		$this->db->set('fecha',date("Y-m-d"));
		$this->db->set('hora',time());
		$this->db->set('estado','No-eliminado');

		$this->db->insert('comanda');

		return $this->db->insert_id();

	}

	 function insertaConsumo($cantidad,$idcomanda,$nomProducto)
	 {	
	 	
	 	
	 	$this->db->select('nombre');
		$this->db->where('nombre',$nomProducto);
		$this->db->where('idCoComanda',$idcomanda);
		$this->db->from('consumo');
		$this->db->join('producto','idCoProducto=idProducto');
		$consultaNombre=$this->db->get();

		if(! empty($consultaNombre->result_array()))
		{	
			$this->db->select('cantidadConsumo,idProducto,precio');
			$this->db->where('nombre',$nomProducto);
			$this->db->where('idCoComanda',$idcomanda);
			$this->db->from('consumo');
			$this->db->join('producto','idCoProducto=idCoProducto');
			$cant=$this->db->get();	

			$vec=$cant->result_array();
			$cant=$vec[0]['cantidadConsumo'];
			$idPro=$vec[0]['idProducto'];
			$precio=$vec[0]['precio'];
			$cantTotal=$cant+$cantidad;

			$this->db->set('cantidadConsumo',$cantTotal);
			$this->db->set('subtotal',$precio*$cantTotal);
			$this->db->where('idCoComanda',$idcomanda);
			$this->db->where('idCoProducto',$idPro);
			$this->db->update('consumo');
			$cant=0;
			
		}
		else{

			$datos=$this->consultaProducto($nomProducto);
			$idProduc=$datos[0]['idProducto'];
			$nombre=$datos[0]['nombre'];
			$precio=$datos[0]['precio'];

			$this->db->set('idCoComanda',$idcomanda);
			$this->db->set('idCoProducto',$idProduc);
			$this->db->set('cantidadConsumo',$cantidad);
			$this->db->set('subtotal',$precio*$cantidad);
			$this->db->insert('consumo');

		return $this->db->insert_id();
		}

	 }


	 function consultaProducto($nombre)
	 {
	 	$this->db->where('nombre',$nombre);
		$query=$this->db->get('producto');

		return $query->result_array();
	 }

	 function insertaComandaPaquete($cantidad,$idcomanda,$nomPaquete)
	 {	
	 	$this->db->select('nombre');
		$this->db->where('nombre',$nomPaquete);
		$this->db->where('fkPaComanda',$idcomanda);
		$this->db->from('comandaincluyepaquete');
		$this->db->join('paquete','fkComandaPaq=idPaquete');
		$consultaNombre=$this->db->get();

		if(! empty($consultaNombre->result_array()))
		{
			$this->db->select('cantidad,fkComandaPaq,precio');
			$this->db->where('nombre',$nomPaquete);
			$this->db->where('fkPaComanda',$idcomanda);
			$this->db->from('comandaincluyepaquete');
			$this->db->join('paquete','fkComandaPaq=idPaquete');
			$cant=$this->db->get();

			$vec=$cant->result_array();
			$cant=$vec[0]['cantidad'];
			$idPaq=$vec[0]['fkComandaPaq'];
			$precio=$vec[0]['precio'];
			$cantTotal=$cant+$cantidad;


			$this->db->set('cantidad',$cantTotal);
			$this->db->set('subtotal',$cantTotal*$precio);
			$this->db->where('fkPaComanda',$idcomanda);
			$this->db->where('fkComandaPaq',$idPaq);
			$this->db->update('comandaincluyepaquete');
			$cant=0;
			
		}
	 else{

	 		$datos=$this->consultaPaquete($nomPaquete);
	 		$idPaquete=$datos[0]['idPaquete'];
	 		$precio=$datos[0]['precio'];

	 		$this->db->set('fkPaComanda',$idcomanda);
	 		$this->db->set('fkComandaPaq',$idPaquete);
	 		$this->db->set('cantidad',$cantidad);
	 		$this->db->set('subtotal',$cantidad*$precio);
	 		$this->db->insert('comandaincluyepaquete');
	  	}
	 }

	 function consultaPaquete($nombre)
	 {	
	 	$this->db->where('nombre',$nombre);
		$query=$this->db->get('paquete');
		return $query->result_array();

	 }

	
	 function insertaMesaComanda($idComanda,$idMesa)
	 {
	 	$this->db->set('fkMeComanda',$idComanda);
	 	$this->db->set('fkMeMesa',$idMesa);
	 	$this->db->insert('mesatienecomanda');
	 }

	 function insertaCuenta($idComanda,$idUser)
	 {	
	 	
	 	$total1=$this->totalConsumo($idComanda);
	 	$total2=$this->totalPaquete($idComanda);

	 	$totalC=$total1[0]['total'];
	 	$totalP=$total2[0]['total'];

	
	 	$totalT=$totalC+$totalP;
	 	
	 	$this->db->set('fkCuComanda',$idComanda);
	 	$this->db->set('fkCuEmpleado',$idUser);
	 	$this->db->set('total',$totalT);
	 	$this->db->set('estadoDeCuenta','No-pagado');
	 	$this->db->insert('cuenta');

	 	
	 }

	 function totalConsumo($idComanda){

	 	$this->db->select_sum('subtotal','total');
	 	$this->db->where('idCoComanda',$idComanda);
		
		$query=$this->db->get('consumo');
	 	 return $query->result_array(); 
	 }

	 function totalPaquete($idComanda)
	 {	
	 	$this->db->select_sum('subtotal','total');
	 	$this->db->where('fkPaComanda',$idComanda);
	 	$query=$this->db->get('comandaincluyepaquete');
	 
	 	return $query->result_array();


	 }
/*********************Consultar Comanda/Consumo*************/

function consultaComanda($idUser,$fecha,$idComanda){
	$this->db->select('empleado.nombre as nombreEmpleado,idComanda,fecha,hora,
					 cantidadConsumo,subtotal, producto.nombre as nombreProducto');
	$this->db->where('idEmpleado',$idUser);
	$this->db->where('fecha',$fecha);
	$this->db->where('idComanda',$idComanda);
	$this->db->where('estadoDeCuenta','No-pagado');
	$this->db->from('empleado');
	$this->db->join('comanda','empleado.idEmpleado=comanda.fkCoEmpleado');
	$this->db->join('cuenta','idComanda=fkCuComanda');
	$this->db->join('consumo','comanda.idComanda=consumo.idCoComanda');
	$this->db->join('producto','idCoProducto=idProducto');
	$query = $this->db->get();


	return $query->result_array();

}

function consultaComandaElimina($fecha){
	$this->db->select('empleado.nombre as nombreEmpleado,idComanda,fecha,hora,
					 total');
	$this->db->where('fecha',$fecha);
	$this->db->where('estadoDeCuenta','No-pagado');
	$this->db->where('estado','No-eliminado');
	$this->db->from('empleado');
	$this->db->join('comanda','empleado.idEmpleado=comanda.fkCoEmpleado');
	$this->db->join('cuenta','idComanda=fkCuComanda');
	$query = $this->db->get();


	return $query->result_array();

}




/*********Eliminación de la Comanda************************/

	 function eliminacionLogica($idComanda){

	 	$this->db->set('estado','Eliminado');
		$this->db->where('idComanda',$idComanda);
		$this->db->update('comanda');

	 }

/**********************Inserta Usuario-Admin*****/

function insertaUsuario($nombre,$apellido,$username,$contraseña,$tipoUsuario,$correo,$tel)
{
		$this->db->set('nombre',$nombre);
	 	$this->db->set('apellido',$apellido);
	 	$this->db->set('nomUsuario',$username);
	 	$this->db->set('password',$contraseña);
	 	$this->db->set('tipoUsuario',$tipoUsuario);
	 	$this->db->set('correo',$correo);
	 	$this->db->set('telefono',$tel);
	 	$this->db->insert('empleado');
}

function agregaProducto($nombre,$cantidad,$costo,$precio)
{
	$this->db->set('nombre',$nombre);
	$this->db->set('cantidad',$cantidad);
	$this->db->set('costo',$costo);
	$this->db->set('precio',$precio);
	$this->db->insert('producto');
}
function calculaReporte($fecha){

	$this->db->select_sum('total');
	$this->db->where('fecha',$fecha);
	$this->db->where('estadoDeCuenta',"Pagado");
	$this->db->from('comanda');
	$this->db->join('cuenta','idComanda=fkCuComanda');
	$query=$this->db->get();
	return $query->result_array();

}	



function updateCuenta($idComanda,$idUser)
{	
	    $total1=$this->totalConsumo($idComanda);
	 	$total2=$this->totalPaquete($idComanda);

	 	$totalC=$total1[0]['total'];
	 	$totalP=$total2[0]['total'];

	
	 	$totalT=$totalC+$totalP;
	 	
	 	$this->db->set('fkCuComanda',$idComanda);
		$this->db->set('fkCuEmpleado',$idUser);
		$this->db->set('total',$totalT);
		$this->db->where('fkCuComanda',$idComanda);
		$this->db->update('cuenta');

}

function consultaCuenta($fecha)
{
	$this->db->select('fkCuComanda,nombre,apellido,total,estadoDeCuenta');
	$this->db->where('estadoDeCuenta','No-pagado');
	$this->db->where('fecha',$fecha);
	$this->db->from('cuenta');
	$this->db->join('empleado', 'fkCuEmpleado=idEmpleado');
	$this->db->join('Comanda','fkCuComanda=idComanda');
	$query=$this->db->get();

	return $query->result_array();
}

function cobrandoCuenta($idComanda){

	$this->db->set('estadoDeCuenta','Pagado');
	$this->db->where('fkCuComanda',$idComanda);
	$this->db->update('cuenta');


}

function consultaPaqueteEdita($idComanda){

	$this->db->select('idComanda,nombre,cantidad,subtotal');
	$this->db->where('idComanda',$idComanda);
	$this->db->from('comanda');
	$this->db->join('comandaincluyepaquete','idComanda=fkPaComanda');
	$this->db->join('paquete','fkComandaPaq=idPaquete');
	$query=$this->db->get();

	return $query->result_array();

}

function consultaMesa($fecha){

	$this->db->select('fkMeMesa,estadoDeCuenta,idComanda');
	$this->db->where('estadoDeCuenta','No-pagado');
	$this->db->where('comanda.fecha',$fecha);
	$this->db->where('comanda.estado','No-eliminado');
	$this->db->from ('cuenta');
	$this->db->join('comanda','fkCuComanda=idComanda');
	$this->db->join('mesatienecomanda','idComanda=fkMeComanda');
	$query=$this->db->get();

	return $query->result_array();
}

function muestraUsuarios(){
/*	
otra manera de obtener las tuplas de una tabla :)
return $this->db->get('empleado')
					->result();
*/
	$this->db->select('idEmpleado,nombre,apellido,nomUsuario,tipoUsuario,correo,telefono');
	$this->db->from('empleado');
	$query=$this->db->get();
	return $query->result_array();

	
}

function eliminandoUsuario($idUser){
	
	$this->db->where('idEmpleado', $idUser);
	$this->db->delete('empleado'); 

}

function muestraProducto(){
	$this->db->select('idProducto,nombre,costo,precio');
	$this->db->from('producto');
	$query=$this->db->get();
	return $query->result_array();
}

function eliminandoProducto($idProducto){
	$this->db->where('idProducto', $idProducto);
	$this->db->delete('producto'); 
}

function idusuario($idComanda){
$this->db->select('fkCoEmpleado');
$this->db->where('idComanda',$idComanda);
$this->db->from('comanda');
$query = $this->db->get();
return $query->result_array();

}

function ticketConsumo($idComanda){

	$this->db->select('producto.nombre as nomPro, producto.precio as prePro,
					  cantidadConsumo,consumo.subtotal as conSub');
	$this->db->where('idComanda',$idComanda);
	$this->db->from('comanda');
	$this->db->join('consumo','idComanda=idCoComanda');
	$this->db->join('producto','idCoProducto=idProducto');
	$query = $this->db->get();
	return $query->result_array();
}

function ticketPaquete($idComanda){

	$this->db->select('paquete.nombre as nomPaq, paquete.precio as prePaq, 
					comandaincluyepaquete.cantidad as canPaq, 
					comandaincluyepaquete.subtotal as subPaq');
	$this->db->where('idComanda',$idComanda);
	$this->db->from('comanda');
	$this->db->join('comandaincluyepaquete','idComanda=fkPaComanda');
	$this->db->join('paquete','fkComandaPaq=idPaquete');

	$query = $this->db->get();
	return $query->result_array();
}

function datosGenerales($idComanda){

	$this->db->select('idComanda,total,nombre,apellido');
	$this->db->where('idComanda',$idComanda);
	$this->db->from('comanda');
	$this->db->join('cuenta','idComanda=fkCuComanda');
	$this->db->join('empleado','fkCuEmpleado=idEmpleado');

	$query = $this->db->get();
	return $query->result_array();

}








}
