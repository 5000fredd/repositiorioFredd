/*=============================================
OBJETO CON LAS PROPIEDADES DEL SCROLL
=============================================*/

var ps = {

	posicionScroll: 0,
	articulos: document.querySelectorAll("#scroll article"),
	cajaScroll: document.querySelector("#scroll"),
	cabezote: document.querySelector("header"),
	botonera: document.querySelectorAll("nav ul li a"),
	ruta: null,
	intervalo: null,
	destinoScroll: 0,
	padding: 0

}

/*=============================================
OBJETO CON LOS METODOS DEL SCROLL
=============================================*/

var ms = {

	inicioScroll: function(){

		document.addEventListener("scroll", ms.efectoParallax)

		for(var i = 0; i < ps.botonera.length; i ++){

			ps.botonera[i].addEventListener("click", ms.desplazamiento)
			
		}
		

	},

	efectoParallax: function(){

		ps.posicionScroll = window.pageYOffset;

		console.log(ps.posicionScroll);

		if (ps.posicionScroll > 100) {

			ps.cabezote.style.position = "fixed";
			ps.cabezote.style.zIndex = 10;

			if(window.matchMedia("(min-width:768px)").matches){

				ps.padding = 80;

			}else{

				ps.padding = 140;

			}

		} else {

			ps.cabezote.style.position = "relative";
			ps.cabezote.style.zIndex = 0;

			if(window.matchMedia("(min-width:768px)").matches){

				ps.padding = 180;
				//ps.padding = 180;

			}else{

				ps.padding = 280;

			}

		}

		//offsetTop para saber el limite superior
		if(ps.posicionScroll > ps.cajaScroll.offsetTop-200){

			for(var i = 0; i < ps.articulos.length; i++){

				ps.articulos[i].style.marginLeft = "0%"; 

			}

		}else{

			for(var i = 0; i < ps.articulos.length; i++){

				if(window.matchMedia("(min-width:768px)").matches){

					ps.articulos[i].style.marginLeft = ps.posicionScroll/22.8 -100 + "%"; 

				}
				
			}

		}

	},

	desplazamiento: function(ruta){
		//preventDefault quita los eventos que vienen por defecto en este caso llamar a una referencia y redirecionarla
		ruta.preventDefault();
		
		ps.ruta = ruta.target.getAttribute("href");

		ps.destinoScroll = document.querySelector(ps.ruta).offsetTop - ps.padding;
		console.log("ps.destinoScroll", ps.destinoScroll);


		ps.intervalo = setInterval(function(){

			if(ps.posicionScroll < ps.destinoScroll){

				ps.posicionScroll += 100;

				if(ps.posicionScroll >= ps.destinoScroll){

					ps.posicionScroll = ps.destinoScroll;

					clearInterval(ps.intervalo);

				}

			}else{

				ps.posicionScroll -= 100;

				if(ps.posicionScroll <= ps.destinoScroll){

					ps.posicionScroll = ps.destinoScroll;

					clearInterval(ps.intervalo);

				}

			}
			
			//scrollTp(x, y)
			window.scrollTo(0, ps.posicionScroll);

		},50)

		

	}

}
ms.inicioScroll();