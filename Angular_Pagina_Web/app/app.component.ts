//importamos la clase component para recopilar metadatos de configuracion de componenetes
import { Component, OnInit } from '@angular/core';

declare var jQuery:any;
declare var $:any;

//Decorador de la clase componente
@Component({
  //El selector es la etiqueta personalizada que nos permite crear Angular en el HTML y donde se va a vizualizar este componente
  //siempre en letras minisculas y separadas por guion
  selector: 'app-root',

  //el templateUrl es la ruta de la vista HTML que va imprimir este componente
  templateUrl: './app.component.html',

  //La ruta del estilo donde direccionamos la hoja de estilo exclusiva de este componente
  styleUrls: ['./app.component.css']

})

//Exportamos la clase con el nombre que nosotros declaramos en el APP MODULE
export class AppComponent implements OnInit {

ngOnInit(){


	}

}
