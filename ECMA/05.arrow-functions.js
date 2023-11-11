console.log("### ARROW FUNCTIONS ###");

/*=============================================
FUNCIONES DE TIPO FLECHA: Son funciones anónimas y se deben guardar en variables constantes para no ser modificadas en el futuro
=============================================*/

//Funciones de tipo flecha sin parámetros
//usamos variables constantes para que no se modifiquen 
const holaMundo = () => {

	console.log("Hola donde estoy ggg")

}

holaMundo();

//Funciones de tipo flecha con un solo parámetro

const holaMundoParam = mensaje => {

	console.log(mensaje)
}

holaMundoParam("Hola Mundo como estan...");

//Funciones de tipo flecha un varios parámetros

const holaMundoParams = (mensaje1, mensaje2) => {

	console.log(mensaje1, mensaje2)
}

holaMundoParams("Hola Mundo...", "cómo están");


