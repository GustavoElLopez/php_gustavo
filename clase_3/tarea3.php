<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>    
    
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Boostrap</title>

</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
    Bienvenido al Menu Principal, Elije una de las siguientes opciones:

</span>
  </div>
</nav>


<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">

<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Desplegar Formulario Laboral</button>

</span>


<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tienda de Variedades
</button>
</span>
  </div>
</nav>



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Laboral</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <fieldset>
            <legend>Datos Personales</legend>

            <input type="text" placeholder="Tu Nombre" name="nombre"required autofocus/>
            <input type="text" placeholder="Tu Apellido" name="apellido"requiered/>
        </p>
            <label>Fecha de Nacimiento</label>
            <input type="date"/></label>
            <input type="number" placeholder="Tu Edad"/>
        </p>
            <input type="email" placeholder="Tu E-Mail"/>
            <input type="phone" placeholder="Telefono"/>
        </p>
            <label>Sexo:</label>
            <input type="radio" name="sexo" value="h"/><label>Hombre</label>
            <input type="radio" name="sexo" value="m"/><label>Mujer</label>
        </p>
            <label>Ciudad de Residencia</label>
            <select name="ciudad">
                <option>Asunción</option>
                <option>San Lorenzo</option>
                <option>Fernando de la Mora</option>
                <option>Capiatá</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Datos Laborales</legend>
            <label>Disponibilidad de tiempo</label>
            <input type="checkbox"  value="true" name="dispo_m">Mañana
            <input type="checkbox"  value="true" name="dispo_t">Tarde
            <input type="checkbox"  value="true" name="dispo_n">Noche
            </p>
            <label>Aspiracion Salarial</label>
            Gs. 2.500.000<input type="range" min="2500000" max="5500000" step="100000">Gs. 5.500.000
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tienda de Variedades</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
    <div class="container">
        
        <form>
            <hr>
                <input type="text" placeholder="Quieres...?">
                <button type="submit"> Buscar </button>
        </form>
        <hr>
        <h3> Productos Destacados </h3>
        <img src="imagenes/producto1.jpg" class="img_producto">
        <img src="imagenes/producto2.jpg" class="img_producto">
        <img src="imagenes/producto3.jpg" class="img_producto">
        <img src="imagenes/producto4.jpg" class="img_producto">

    </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>



</body>


<script src="js/bootstrap.bundle.min.js"></script>


</html>