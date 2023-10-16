<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>    
  
<link rel="stylesheet" href="style.css">

  <script src="js/bootstrap.bundle.min.js"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tienda de Variedades
</button>

<!-- Modal -->

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
</html>