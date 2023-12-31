import { Component, OnInit } from '@angular/core';
import { ArticulosService } from '../../services/articulos.service';
import { UsuariosService } from '../../services/usuarios.service';

//Esto es la clase que se neceista par anavegar entre paginas
import { ActivatedRoute } from '@angular/router';

//Esto es la clase que se necesita para trabajar con formularios
import {NgForm} from '@angular/forms';

@Component({
  selector: 'app-articulo',
  templateUrl: './articulo.component.html',
  styleUrls: ['./articulo.component.css']
})
export class ArticuloComponent implements OnInit {

	//VARIABLES PÚBLICAS O GLOBALES

	public articuloJson:any;
	public renderArticulo:any;
	public contenidoArticulo:any;
	public login:boolean = false;
	public usuario:string = '';
	public password:string = '';
	public usuariosJson:any;
	public renderUsuario:any;
	public validarLogin:boolean = true;

	constructor(activateRoute: ActivatedRoute, private articulosService: ArticulosService, private usuariosService: UsuariosService){

		/*=============================================
		RECIBIENDO DATOS DINÁMICOS
		=============================================*/

		this.articulosService.getArticulos()
		.subscribe( respuesta => {

			this.articuloJson = respuesta;
			
			this.renderArticulo = this.articuloJson.find((result: any) => {

				return result.url == activateRoute.snapshot.params["id"]

			}) 

			this.contenidoArticulo = this.renderArticulo.contenido;

		})

		//console.log("ActivateRoute", activateRoute.snapshot.params["id"]);	

	}

	ngOnInit(): void {
    
    }

    /*=============================================
	FORMULARIO LOGIN,
	two way lo que se defina en la vista se define en el componente o lo que se defina en el componente se 
	define en la vista
	=============================================*/

  	onSubmit(f: NgForm){

  		this.usuariosService.getUsuarios()
	  	.subscribe(respuesta =>{
	  		
	  		this.usuariosJson = respuesta;

	  		this.renderUsuario = this.usuariosJson.find((result: any) => {
	  			if(result.usuario == this.usuario && result.password == this.password ){

	  				return true;

	  			}else{

	  				return false;
	  			}

			}) 


			if(this.renderUsuario){

				this.login = true;

			}else{

				this.validarLogin = false;
			}

	  	})

	  	 //console.log("f", f);


  	}

}
