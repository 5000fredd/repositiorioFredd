console.log("### IF TERNARIO ###");

/*=============================================
IF TERNARIO: Sirve para hacer comprobaciones rápidas de Falso o Verdadero
=============================================*/

let camisa = {

	talla : 40,
	cantidad : 0,
	existencia: false

}
//const {estan las propiedades del objeto} = colocacmos el objeto
const {talla, cantidad, existencia} = camisa;

let respuesta;

existencia ? respuesta = "Hay "+cantidad+ " camisas" : 	respuesta = "No hay camisas";

console.log("respuesta", respuesta);



