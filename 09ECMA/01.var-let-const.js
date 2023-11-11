console.log("### VAR ###");

/*=============================================
Declaración VAR: Se utiliza para declarar variables globales y puede ser transformado su valor en cualquier momento
=============================================*/

var nombre_var = "Juan";

if(nombre_var == "Juan"){

	var edad_var = 30;

	var nombre_var = "Miguel";

	console.log("nombre_var", nombre_var);

}

console.log("nombre_var", nombre_var);
console.log("edad_var", edad_var);

console.log("### LET ###");

/*=============================================
Declaración LET: Se utiliza para declarar variables en contextos específicos y pueden cambiar su valor en dicho contexto, se destruyen fuera del contexto para ahorrar memoria en el navegador
y no funcionan fuera del contexto en este caso fuera de la condicinal if, entonces la utulizamos para cambiar valor en la variable LET esto para ahorrar memoria
=============================================*/

let nombre_let = "Juan";

if(nombre_let == "Juan"){

	let edad_let = 30;

	console.log("edad_let", edad_let);

	nombre_let = "Miguel";

	console.log("nombre_let", nombre_let);

}

console.log("nombre_let", nombre_let);

console.log("### CONST ###");

/*=============================================
Declaración CONST: Se utiliza para declarar variables en contextos específicos y NO pueden cambiar su valor en dicho contexto, se destruyen por fuera del contexto por lo tanto ahorra memoria
la utilizamos para conservar el valor y que no se modifique esto para ahorrar memoria
=============================================*/

const nombre_const = "Juan";

if(nombre_const == "Juan"){

	const edad_const = 30;

	console.log("edad_const", edad_const);

	const nombre_const = "Miguel";
	
	console.log("nombre_const", nombre_const);

}

console.log("nombre_const", nombre_const);











