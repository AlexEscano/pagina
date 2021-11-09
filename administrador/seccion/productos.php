<?php include("../template/cabecera.php");?>

   <div class="col-md-5">
     
   <div class="card">
        Agregar Animes
       <div class="card-body">
        
     <form method="POST" enctype="multipart/form-data">

            <div class = "form-group">
                <label for="txtID">ID</label>
                <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
            
            </div>

     <div class="form-group">
     <label for="nombreID">Nombre:</label>
     <input type="text" class="form-control" id="nombreID" name="txtNombre" placeholder="Nombre">
     </div>

     <div class="form-group">
     <label for="nombreID">Imagen</label>
     <input type="file" class="form-control" id="imagenID" name="txtImagen" placeholder="Imagen">
     </div>

     <div class="btn-group" role="group" aria-label="">
           <button type="button" class="btn btn-success">Agregar</button>
           <button type="button" class="btn btn-warning">Modificar</button>
           <button type="button" class="btn btn-info">Cancelar</button>
       </div> 
 
     </div>
     

     
     </form>

          
       </div>
   </div>

     

   <div class="col-md-7">
       
      Tabla de agregar Anime

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>

        </thead>
        <tbody>

          <tr>
            <td>2</td>
            <td>Shingeki no kiojin</td>
            <td>Agregar|Eliminar</td>
          </tr>
        
        </tbody>
      </table>
      
   </div>

<?php include("../template/pie.php");?>