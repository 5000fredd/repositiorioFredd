console.log("### ASYNC - AWAIT ###");

/*=============================================
ASYNC - AWAIT: Nos simplifica el código para ejecutar promesas asíncronas con una sola respuesta correcta
=============================================*/

let reservaDestino = [{
		id: 1,
		destino: "Miami"
	}, {
		id: 2,
		destino: "New York"
	}, {
		id: 3,
		destino: "Los Angeles"
	}
]

let reservaDia = [{
		id: 1,
		dia: "Lunes"
	}, {
		id: 2,
		dia: "Martes"
	}, {
		id: 3,
		dia: "Miércoles"
	}
]

let reservaAsiento = [{
		id: 1,
		asiento: "Ventana"
	}, {
		id: 2,
		asiento: "Medio"
	}, {
		id: 3,
		asiento: "Pasillo"
	}
]

//PRIMERA TAREA: Reservar el destino

let getDestino = id => {

	return new Promise((resolve, reject)=>{

		let destinoDB = reservaDestino.find( destino => destino.id === id)

		if(!destinoDB){

			reject("No existe el destino seleccionado");

		}else{

			resolve(destinoDB);
		}

	})

}

//SEGUNDA TAREA: Reservar el día

let getDia = id => {

	return new Promise((resolve, reject)=>{

		let diaDB = reservaDia.find( dia => dia.id === id)

		if(!diaDB){

			reject("No existe el dia seleccionado");

		}else{

			resolve(diaDB);
		}

	})

}

//TERCERA TAREA: Reservar el asiento

let getAsiento = id => {

	return new Promise((resolve, reject)=>{

		let asientoDB = reservaAsiento.find( asiento => asiento.id === id)

		if(!asientoDB){

			reject("No existe el asiento seleccionado");

		}else{

			resolve(asientoDB);
		}

	})

}



//RESPUESTA DE LAS TAREAS ASÍNCRONAS con ASYNC y AWAIT

let informeReserva = async(idDestino, idDia, idAsiento) =>{

	let informeDestino = await getDestino(idDestino);
	let informeDia = await getDia(idDia);
	let informeAsiento = await getAsiento(idAsiento);

	return `Tu destino será: ${informeDestino.destino}, tu dia será: ${informeDia.dia}, tu asiento será: ${informeAsiento.asiento}`

}

informeReserva(1,1,1)
.then( mensaje => console.log(mensaje))
.catch( err => console.log(err))


