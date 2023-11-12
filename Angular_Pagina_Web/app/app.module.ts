
//Importamos la clase NgModule que es el módulo raíz.
import { NgModule } from '@angular/core';

//Importamos la clase BrowserModule, para buscar módulos de angular.
import { BrowserModule } from '@angular/platform-browser';

//Importamos los módulos de ruta
import { AppRoutingModule } from './app-routing.module';

//Importamos los módulos de peticiones HTTP
import {HttpClientModule} from '@angular/common/http';

//Importamos los módulos para trabajar con formularios en Angular
import { FormsModule } from '@angular/forms';

//AppComponent es el componente principal de Angular
import { AppComponent } from './app.component';
import { HeaderComponent } from './pages/inicio/header/header.component';
import { SlideshowComponent } from './pages/inicio/slideshow/slideshow.component';
import { GaleriaComponent } from './pages/inicio/galeria/galeria.component';
import { MouseComponent } from './pages/inicio/mouse/mouse.component';
import { ArticulosComponent } from './pages/inicio/articulos/articulos.component';
import { FormularioComponent } from './pages/inicio/formulario/formulario.component';
import { InicioComponent } from './pages/inicio/inicio.component';
import { ArticuloComponent } from './pages/articulo/articulo.component';

//Los decoradores son funciones que modifican clases de JavaScript. 
@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    SlideshowComponent,
    GaleriaComponent,
    MouseComponent,
    ArticulosComponent,
    FormularioComponent,
    InicioComponent,
    ArticuloComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
