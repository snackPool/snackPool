/*$('#loginButton').click(function(){

		var elem = $('#user').val();
		var elem1 = $('#password').val();
		if ((elem == "") || (elem1 == "")){
				alert('Aún no has ingresado tus datos, vuelve a intentarlo');
				
				
			}
		else
		{
			envia();
		}
	

	});

}*/

function mesaId()
{	
	var idMesa = $(this).attr('id');
	var idComanda = $(this).parent().children("input:hidden").val();
	
$.ajax({
	type: "POST",
	url:"localhost/snackPool/index.php/welcome/insertaMesaComanda",
	data:{mesa:idMesa,comanda:idComanda},

});


}