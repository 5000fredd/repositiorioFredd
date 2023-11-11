
let vehiculos = [{
	id: 1,
	marca: "Mazda",
	modelo: 2016
}, {
	id: 2,
	marca: "Toyota",
	modelo: 2017
}, {
	id: 3,
	marca: "Hyundai",
	modelo: 2018
}]

console.log("### FILTER ###");

/*=============================================
FUNCIÓN FILTER(): Recorre cada elemento del Array y retorna un nuevo Array filtrando solo los elementos solicitados
filter devuele array 
=============================================*/
//esta la variable = array con .filter para filtrar la busqueda seguida de una varible tipo flecha siendo vehiculo
let filtrarVehiculos = vehiculos.filter( vehiculo => {
	
	return vehiculo.id > 2016

})

console.log("filtrarVehiculos", filtrarVehiculos);

console.log("### FIND ###");

/*=============================================
FUNCIÓN FIND(): Recorre cada elemento del Array y retorna el primer elemento que coincida con la búsqueda en este caso saca
el primer id 2 con modelo 2017 y filter devuele un objeto
=============================================*/

let buscarVehiculo = vehiculos.find(vehiculo => {

	return vehiculo.modelo > 2016

})

console.log("buscarVehiculo", buscarVehiculo);




