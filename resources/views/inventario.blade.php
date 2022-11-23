@extends('template')

@section('contenido')
<section class="intro">
    <div class="gradient-custom-1 h-100 mb-5 mt-5">
        <h2 class="text-center"> Inventario de productos </h2>

      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="table-responsive bg-white">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Precio Compra</th>
                      <th scope="col">Fecha ingreso</th>
                      <th scope="col">Categoria</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="color: #666666;">Mascarilla N95</th>
                      <td>Caps</td>
                      <td>100</td>
                      <td>$99</td>
                      <td>10/10/10</td>
                      <td>Covid</td>
                      <td>Editar</td>
                      <td>Eliminar</td>

                    </tr>
                    <tr>
                      <th scope="row" style="color: #666666;">Smart watch</th>
                      <td>Chine</td>
                      <td>10</td>
                      <td>$119</td>
                      <td>10/10/10</td>
                      <td>Reloj</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
            
                    </tr>
                    <tr>
                      <th scope="row" style="color: #666666;">Audifonos Lenovo</th>
                      <td>Lenovo</td>
                      <td>20</td>
                      <td>$199</td>
                      <td>10/10/10</td>
                      <td>Sonido</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                    </tr>
                    <tr>
                      <th scope="row" style="color: #666666;">Botella Kawaii</th>
                      <td>Kawaii</td>
                      <td>200</td>
                      <td>$99</td>
                      <td>10/10/10</td>
                      <td>Bebida</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                      
                    </tr>
                    <tr>
                      <th scope="row" style="color: #666666;">Paneles solares</th>
                      <td>POWEN</td>
                      <td>2000</td>
                      <td>$999</td>
                      <td>10/10/10</td>
                      <td>Hogar</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                      
                    </tr>
                    <tr>
                      <th scope="row" style="color: #666666;">Juego Desconectados</th>
                      <td>Hasbrow</td>
                      <td>90</td>
                      <td>$299</td>
                      <td>10/10/10</td>
                      <td>Juegos</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@stop
