console.log("### CALLBACKS ###");

/*=============================================
CALLBACKS: Es una funcíón que se ejecuta cuando algo sucede en otra función
=============================================*/

let paises = [{
	id: 1,
	pais: "Argentina",
	continente: "Suramérica"
}, {
	id: 2,
	pais: "Colombia",
	continente: "Suramérica"
}, {
	id: 3,
	pais: "México",
	continente: "Centroamérica"
}]

let tomarPais = (id, callback) =>{

	let idPais = paises.find( pais => {

		return pais.id === id;

	})

	if(!idPais){

		callback("No existe pais en la BD");
	
	}else{

		callback(null, idPais)

	}

}
//los callback se devuelven con dos parametros el de error y el de respuesta  en este caso el 2 es el id que se requiere
tomarPais(2, (err, res)=>{

	if(err){

		return console.log(err);

	}
	
	console.log(res);

})





