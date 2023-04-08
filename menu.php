 <!-- Barra de Navegación con logotipo incluido -->
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
   <div class="container-fluid">
     <!-- El logotipo va en la sección navbar-brand y redirige a la página principal tiene estilos css ajustados-->
     <a class="navbar-brand" href="./index.php"><img src="./imagenesProductos/logo.png" alt="Logo E-commerce" class="logo"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link" aria-current="page" href="./Registro.html">Registro</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="./index.html">Productos</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" aria-current="page" href="./Carro.html">Carro de Compras</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" aria-current="page" href="./pagos.html">Pagos</a>
         </li>
       </ul>
       <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
         <button class="btn btn-outline-success" type="submit">Busca</button>
       </form>
     </div>
   </div>
</nav>