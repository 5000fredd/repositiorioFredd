console.log("### MAP() ###");

/*=============================================
FUNCIÓN MAP(): Recorre cada elemento del Array y retorna modifiaciones que le queramos al array inicial
en este caso se agraga un nuevo valor de tipo lugar siendo estadio 
=============================================*/

let deportes = [{
	titulo: "Natacion",
	nivel: "Básico"
}, {
	titulo: "Futsal",
	nivel: "Intermedio"
}, {
	titulo: "Golf",
	nivel: "Avanzado"
}]


deportes.map((deporte, index) => {

	if(index === 1){

		deporte.lugar = "Estadio";

	}

	if(index === 2){

		deporte.nivel = "Básico";
	}

	return deporte;

})

console.log("deportes", deportes);




