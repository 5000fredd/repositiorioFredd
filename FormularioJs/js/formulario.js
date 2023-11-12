/*=============================================
OBJETO CON LAS PROPIEDADES DEL FORMULARIO
=============================================*/
var pf = {

	entradas: document.querySelectorAll("input.validar"),

	valor: null,

	expresionRegular: null,

	validarUsuario: false,

	validarPassword: false,

	validarEmail: false,

	validarTerminos: null

}

/*=============================================
OBJETO CON LOS METODOS DEL FORMULARIO
=============================================*/

var mf = {

	inicioFormulario: function(){

		for (var i = 0; i < pf.entradas.length; i++) {

			pf.entradas[i].addEventListener("focus", mf.enFoco);

			pf.entradas[i].addEventListener("blur", mf.fueraFoco);
			//change cambia el valor de la propiedad value en este caso comunicamos los error al instroducir datos
			pf.entradas[i].addEventListener("change", mf.cambioEntrada);

		}

	},


	//El evento focus me indicaba que estaba dentro del input y el evento blur me muestra que sali del input
	enFoco: function(input) {

		pf.valor = input.target.value;


		if (pf.valor == "") {

			document.querySelector("[for=" + input.target.id + "] .obligatorio").style.opacity = 1;

			document.querySelector("#" + input.target.id).style.background = "rgb(118,215,196)";

		}


		document.querySelector("[for="+input.target.id+"]").appendChild(document.createElement("DIV")).setAttribute("class","error")

	},


	fueraFoco: function(input){

		document.querySelector("#"+input.target.id).style.background = "white";

		document.querySelector("[for="+input.target.id+"] .obligatorio").style.opacity = 0;

	},


	cambioEntrada: function(input){

		pf.valor = input.target.value;

		if(pf.valor != ""){

			switch(input.target.id){

				case "nombre":

					if(pf.valor.length < 2 || pf.valor.length > 6){

						document.querySelector("[for="+input.target.id+"] .error").innerHTML = '<span style="color:red">*Error al ingresar los datos: '+input.target.placeholder+'</span>';

						pf.validarUsuario = false;

					}else{

						document.querySelector("[for="+input.target.id+"] .error").parentNode.removeChild(document.querySelector("[for="+input.target.id+"] .error"))

						pf.validarUsuario = true;

					}

				break;

				case "password":

					pf.expresionRegular = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;
					//test realiza un testeo dentro del value
					if(!pf.expresionRegular.test(pf.valor)){

						document.querySelector("[for="+input.target.id+"] .error").innerHTML = '<span style="color:red">*Error al ingresar los datos: '+input.target.placeholder+'</span>';

						pf.validarPassword = false;

					}else{

						document.querySelector("[for="+input.target.id+"] .error").parentNode.removeChild(document.querySelector("[for="+input.target.id+"] .error"))

						pf.validarPassword = true;
					}

				break;

				case "email":

					pf.expresionRegular = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

						if(!pf.expresionRegular.test(pf.valor)){

							document.querySelector("[for="+input.target.id+"] .error").innerHTML = '<span style="color:red">*Error al ingresar los datos: '+input.target.placeholder+'</span>';

							pf.validarEmail = false;

						}else{

							document.querySelector("[for="+input.target.id+"] .error").parentNode.removeChild(document.querySelector("[for="+input.target.id+"] .error"))

							pf.validarEmail = true;
						}

				break;

			}

		}else{

			document.querySelector("[for="+input.target.id+"] .error").parentNode.removeChild(document.querySelector("[for="+input.target.id+"] .error"))

		}

	},


	validarFormulario: function() {



		pf.validarTerminos = document.querySelector("#terminos").checked;



		if (!pf.validarUsuario || !pf.validarPassword || !pf.validarEmail) {



			console.log("hola")



			return false;



		} else if (!pf.validarTerminos) {



			document.querySelector("#labelEnviar").innerHTML = '<span style="color:red">¡*Favor acepte términos y condiciones!</span>';



			return false;



		} else {



			return true;

		}

	}



}



mf.inicioFormulario();