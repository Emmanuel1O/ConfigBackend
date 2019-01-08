// JavaScript Document

function validacion_index(){
	//validando correo

	valor_nombre = document.getElementById("p_username").value;
	if (valor_nombre.length== 0)
		{
			f_inicio.p_username.focus()
			alert('[ERROR] Tiene que escribit su nombre ');
			return false;
		}
	
	//valido la contraseña
	valor_password = document.getElementById("p_password").value;
	if (valor_password.length== 0)
		{
			f_inicio.p_password.focus()
			alert('[ERROR] Tiene que escribit su contraseña ');
			return false;
		}
	
	
	f_inicio.submit();
	
	
	
}