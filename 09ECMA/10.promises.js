console.log("### PROMISES ###");

/*=============================================
PROMISES: Nos permiten ejecutar un trabajo ya sea síncrono o asíncrono después de que se realiza una tarea anterior
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

//TAREAS SINCRÓNICAS: Tareas que se ejecutan al mismo tiempo
//TAREAS ASÍNCRONAS: Tareas que se ejecutan en diferente tiempo, en este caso una tarea espera la ejecución de la otra

//Respuesta de la primera tarea

getDestino(4).then( destinoDB => {

	console.log(`tu destino será: ${destinoDB.destino}`)

	//Respuesta de la segunda tarea

	getDia(4).then( diaDB => {

		console.log(`tu dia será: ${diaDB.dia}`)

		//Respuesta de la tercera tarea

		getAsiento(1).then( asientoDB => {

			console.log(`tu asiento será: ${asientoDB.asiento}`)

		}).catch( err => {
			
			console.log("err", err);

		})

	}).catch( err => {
		
		console.log("err", err);

	})

}).catch( err => {
	
	console.log("err", err);

})






