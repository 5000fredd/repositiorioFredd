//https://github.com/public-apis/public-apis#development
console.log("### fetch() ###");

/*=============================================
FUNCIÓN FETCH(): Nos permite ejecutar servicios HTTP: GET=toma, POST=crear, PUT=cambia, DELETE=elimina
=============================================*/
//el endpoint es la ruta que nos ofrece la api para poder acceder a la su base de datos
let getApi = () =>{

	const endPoint = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en";

	const params = {

		method: "GET",
		header: {

			"Content-Type": "application/json"
		}
	}

	fetch(endPoint, params).then( response =>{
		
		// console.log("response", response);

		return response.json();

	}).then(result => {

		const resultado = result.sanctorale;
		
		const {title, language} = resultado;
		
		console.log("title", title);	

	})

}

getApi();
