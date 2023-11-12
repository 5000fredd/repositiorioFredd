import { Component, OnInit } from '@angular/core';

//Esto es la clase que se neceista par anavegar entre paginas
import { ActivatedRoute } from '@angular/router';

declare var jQuery:any;
declare var $:any;

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent implements OnInit {

	constructor() { }

  	ngOnInit(): void {

  		/*=============================================
		NAVEGACIÓN SCROLL
		=============================================*/

		$(".nav-link").click((e: { preventDefault: () => void; }) =>{

			e.preventDefault();

			var target = $(this).attr("href");
			
			$("html, body").animate({

				scrollTop: $(target).offset().top

			},1000, "easeOutBack")

		})

		/*=============================================
		SCROLL UP
		=============================================*/

		$.scrollUp({
			scrollText: "",
			scrollSpeed:2000,
			easingType: "easeOutQuint"
		})

		$("#ScrollUp").css({

			  bottom: "20px",
			  right: "20px",
			  width: "50px",
			  height: "50px",
			  background: "url(../assets/img/flecha.jpg)"

		})

  	}

}
