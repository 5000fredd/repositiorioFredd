import { Component, OnInit } from '@angular/core';
import { GaleriaService } from '../../../services/galeria.service';

declare var jQuery:any;
declare var $:any;

@Component({
  selector: 'app-galeria',
  templateUrl: './galeria.component.html',
  styleUrls: ['./galeria.component.css']
})
export class GaleriaComponent implements OnInit {

	//VARIABLES PÚBLICAS O GLOBALES

	public galeriaJson:any;
	public renderGaleria:boolean= true;

	//escribirimos el parametro con miniscusla galeriaService y la clase con mayuscula GaleriaService
	constructor(private galeriaService: GaleriaService){

		/*=============================================
		RECIBIENDO DATOS DINÁMICOS
		=============================================*/

		//getGaleria es el metodo de la clase GaleriaService
		this.galeriaService.getGaleria()
		.subscribe( respuesta => {//subscribe trae la respuesta de lo que tenga la base de datos galeria
			
			// console.log("respuesta", respuesta);

			this.galeriaJson = respuesta;

		})

	}

	ngOnInit(): void {


  		
	}

	callback(){

		if(this.renderGaleria){

			this.renderGaleria = false;

			/*=============================================
			PINTEREST GRID
			=============================================*/

			$('.pinterest_grid').pinterest_grid({
				no_columns: 4, //Número de columnas
				padding_x: 10, //Márgenes internas horizontal
				padding_y: 10, //Márgenes internas vertical
				margin_bottom: 50, //Márgen externa inferor
				single_column_breakpoint: 769 //Punto de quiebre para una sola columna
			});

			/*=============================================
			EKKO LIGHTBOX
			=============================================*/

			//$(document).on("click", "[data-toggle='lightbox']", (e: { preventDefault: () => void; }) =>{

				//e.preventDefault(); //Quitar eventos que vengan por defecto en el navegador
				//$(this).ekkoLightbox(); //Activar la acción del plugin Ekko Lightbox

			//})


		}

	}

}
