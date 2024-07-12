<!doctype html>
<html lang="en">
    <head>
        <title>NOTAS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="js/js.js"></script>
        <script src="js/js2.js"></script>
    </head>

    <body style="background-color: gray;">
        <header>
        <?php include 'log/header.php'?>
        </header>
        <main>

       
      
      


     


    <br>
   


    <h2 style="text-align: center;"><b>(IFCD0110) CONFECCIÓN Y PUBLICACIÓN DE PÁGINAS WEB</b></h2>
    <div class="container" style="border: 2px solid black; background-color: white;">
   <br>
   <div
    class="table-responsive"
   >
    <table
        class="table table-secondary"
    >
        <thead>
            <tr>
                <th scope="col">MODULOS</th>
                <th scope="col">HORAS MODULOS</th>
                <th scope="col">NOTA FINAL</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">MF0950_2: Construcción de páginas web </td>
                <td>210 horas</td>
                <td ><p id="demo1"></p> </td>
            </tr>

            <tr class="">
                <td scope="row">MF0951_2: Integración de componentes software en páginas
                web </td>
                <td>180 horas </td>
                <td ><p id="demo2"></p> </td>
            </tr>

            <tr class="">
                <td scope="row">MF0952_2: Publicación de páginas web> </td>
                <td>90 horas</td>
                <td ><p id="demo3"></p> </td>
</tr>





            
          

        </tbody>
    </table>
   </div>
   <h5>NOTA PARCIAL:<h3 id="demo"></h3></h5> 

   <h4 id="demo5"></h4>
 

 <br>
   <button type="button" style="float:right; margin-top:-50px" class="btn btn-primary" onclick="nota()" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-spreadsheet" viewBox="0 0 16 16" >
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1zm9 6h-3v2h3zm0 3h-3v2h3zm0 3h-3v2h2a1 1 0 0 0 1-1zm-4 2v-2H6v2zm-4 0v-2H3v1a1 1 0 0 0 1 1zm-2-3h2v-2H3zm0-3h2V7H3zm3-2v2h3V7zm3 3H6v2h3z"/>
</svg> Calcular Nota</button>



    </div>

    <form action="notas1.php" method="post">
     
    <div class="container" style="border: 2px solid black; background-color: white; margin-top:50px;">

    <div class="mb-3">
        <br>
        <label for="" class="form-label">NOMBRE DEL PARTICIPANTE:</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width: 500px;background-color:grey "

        />
       
    </div>
    
    <div class="mb-3">
         <label for="" class="form-label"style="width: 100px; float:right;margin-top:-50px; margin-right:100px " >CALIFICACION:</label>
    <select name="calificacion" style="float: right; margin-top:-50px">

    <option value="1">apto</option>
      <option value="0">No Apto</option>
     
    </select>
    
 
        
        
     </div>


    <div class="mb-3">
        <label for="" class="form-label"style="width: 200px; float:right;margin-top:-80px; margin-right:400px ">IDENTIFICACION</label>
        <input
            type="text"
            class="form-control"
            name="identificacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width: 300px;background-color:grey; margin-left:680px; margin-top:-52px"
        />
       
    </div>
    
    <button type="button " class="btn btn-primary" onclick="enviar()" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg> GUARDAR</button>
   


    <button type="button"  class="btn btn-primary" style="float: right;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" >
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg> BORRAR</button>


    </form>



    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   CONSULTAR ESTUDIANTE
  </button>


    <form action="consultar.php" method="post">

<div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen-xl-down">
    <div class="modal-content">

    
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
     <div class="mb-3">
      <label for="" class="form-label">COlOQUE EL CODIGO DEL ESTUDIANTE</label>
      <input
      input type="text" name="identificacion"
       
      
        class="form-control"
        name="identificacion"
        id=""
        aria-describedby="helpId"
        placeholder=""
      />
      
     </div>
     


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">consultar</button>
        <button type="reset" class="btn btn-primary" style="float: left;">Borrar</button>
</form>
      </div>

    </div>
  </div>
</div>













   <br><br>
    </div>







        </main>





        <footer style="margin-top: 60px;">
        <?php include'log/footer.php'?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
