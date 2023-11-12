import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { InicioComponent } from './pages/inicio/inicio.component';
import { ArticuloComponent } from './pages/articulo/articulo.component';

const routes: Routes = [
	//path: url que se introducen  - component: indica lo que se va a cargar en la url
	{path:'', component:InicioComponent },
	{path:'articulo/:id', component: ArticuloComponent},
	{path: '**', pathMatch:'full', redirectTo: '' } // funciona cuando ponen cualquier cosa en la url ej: afdjhvjvd

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
