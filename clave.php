


<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	 
  </head>
  <body>
	  
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
	 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg>
	 
    </div>

    <!-- Login Form -->
	<form name="login" style="align-content:center";>
       
            <tr>
                <th scope="row"><h2>Usuario</h2></th>
                <td>
                    <span class="cnt">
                        <input name="usuario" type="text" class="Input" value="" size="20" />
                    </span>
                </td>
            </tr>
            


			
			<tr>
                <th scope="row"><h2>Email</h2></th>
                <td>
                    <span class="cnt">
                        <input name="password" type="text" class="Input" value="" size="20" />
                    </span>
                </td>
            </tr>
            





                    <span class="cnt">
                        <input value="Entrar" target="_parent" onclick="Login()" type="button" class="boton" />
                    </span>
                </td>
            </tr>







            <tr>
                <th scope="row"><input type="reset" name="Borrar" id="Borrar" value="Reset" class="boton" /></th>
            </tr>
        </table>
    </form>




	




  </div>
</div>

<script language="JavaScript">
        function Login() {
            var done = 0;

//done. Es true si el último valor en la secuencia ya ha sido consumido. Si value está presente junto con done , 
//es el valor de retorno del iterador. Un iterador se considera ya terminado/finalizado cuando la invocación de next() 
//regresa un objeto donde la propiedad done es verdadero


            var usuario = document.login.usuario.value;
            var password = document.login.password.value;

//values() devuelve un array con los valores correspondientes a las propiedades enumerables de un objeto.
// Las propiedades son devueltas en el mismo orden a como lo haría un bucle for...in (la única diferencia es que un bucle for-in 
//también enumera las propiedades en la cadena de prototipo de un objeto).

//ojo que es array?--- recordatorio: Los arrays son objetos similares a una lista cuyo prototipo proporciona métodos para efectuar 
//operaciones de recorrido y de mutación. Tanto la longitud como el tipo de los elementos de un array son variables
			
			
            if (usuario == "carlos" && password == "asehca@yahoo.com") {
                window.location = "eliminar1.php";
            }
			
        }




//IF es una estructura de control utilizada para tomar decisiones. Es un condicional que sirve para realizar unas u otras operaciones
// en función de una expresión. ... Nota: Todas las estructuras de control se escriben en minúsculas en Javascript.


//Igualdad (==) Verifica la igualdad de dos expresiones sin tener en cuenta el tipo de dato. Igualdad estricta (===) 
//Hace lo mismo que el anterior, pero verificando también que coincidan los tipos de datos.



// & significa y


//La propiedad window. location devuelve un objeto de tipo Location con información relacionada con la URL del documento actual. 
//Devuelve un string con la url completa. window.



</script>


<script language="Javascript">

 <!-----Begin
        document.oncontextmenu = function () { return false }

// end--->
        
    </script>













    </body>
</html>








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
