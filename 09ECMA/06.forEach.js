let cursos = [{
	titulo: "Aprende React",
	nivel: "Básico"
}, {
	titulo: "Aprende ECMAScript",
	nivel: "Intermedio"
}, {
	titulo: "Aprende Angular",
	nivel: "Avanzado"
}]


console.log("### FOR ###");

for(let i = 0; i < cursos.length; i++){

	console.log("i", i);

	console.log(cursos[i].titulo)

	if(i > 0){	

		break;
	}


}


console.log("### FOREACH ###");

/*=============================================
FOREACH: Es una reducción del código del ciclo FOR, y para interrumpirlo se debe colocar en primera instancia el return
=============================================*/
//ponemos el array seguida de .forEach (parametro de tipo flecha y el indice que es index)
cursos.forEach((curso, index) => {

	if(index > 0){

		return;
	}

	console.log("index", index);
	console.log(curso.titulo)

})



