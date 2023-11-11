console.log("### DESTRUCTURING ###");

/*=============================================
ASIGNACIÓN POR DESTRUCTURING: Nos permite tromar los valores de las propiedades de un objeto de forma directa, utilizando el mismo nombre de la propiedad
=============================================*/

let carro = {

	marca: "Barril",
	modelo: 2010,
	color: "Celeste"

}
//dentro de los corchetes esta la propiedad del carro tal cual y luego se llama al objeto en este caso carro siendo destructurado
const {marca, modelo, color} = carro;

console.log("carro", color);


