import React, {Fragment} from 'react';
import Header from './components/header/Header';
import Nav from './components/nav/Nav';
import Sidebar from './components/sidebar/Sidebar';
import Container from './components/container/Container';
import Footer from './components/footer/Footer';

export default function App() {
  // LOS PROPS COMPARTES DATOS DINAMICOS PARA LUEGO SER PUESTOS EN EN FRONTEND
  let objHeader = {

    titulo:"Mi primer sitio en Bootstrap 4 de FREDD",
    parrafo:"este sitio es responsivo"

  }

   const fecha = new Date().getFullYear();

  return (

    <Fragment>

          <Header 

          titulo={objHeader.titulo} 
          parrafo={objHeader.parrafo}

          />

          <Nav/>

          <div className="container" style={{"marginTop":"30px"}}>

          <div className="row">

            <Sidebar />

            <Container />

          </div>


        </div>

        <Footer fecha={fecha} />

    </Fragment>
    

  );

}

