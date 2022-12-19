<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Web sencilla de im&aacute;genes">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<title>Flores</title>

	<style>
		div{
			background-color: greenyellow;
			padding: 10px;
		}

    h1, h2{
      text-align:center;
    }

    #flores{
      display:flex;
      justify-content:center;
    }

    table{
      border:1px solid;
      border-collapse:collapse;
      text-align:center;
    }

    th, td{
      border:1px solid;
      border-collapse:collapse;
    }
    p{
      text-align:right;
    }
	</style>
</head>

  <body>
   <h1>EJEMPLO EJERCICIO. Galer&iacute;as de im&aacute;genes</h1>
    <h2>Una selecci&oacute;n de flores.</h2>

  <section id="flores">
  <table>
    <tr>
      <th>Imagen</th>
      <th>Nombre</th>
    </tr>

    <tr>
      <td><img src="imagenes/1.jpg" alt="Flores de corte" width="200" height="200"></td>
      <td>Foto 1: Flores de corte</td>   
    </tr>

    <tr>
      <td><img src="imagenes/2.jpg" alt="Mirabilis Jalapa" width="200" height="200"></td>
      <td>Foto 2: Flor de Mirabilis Jalapa</td>
    </tr>

    <tr>
     <td><img src="imagenes/3.jpg" alt="Strelitzia" width="200" height="200"></td>
      <td> Foto3: Strelitzia. Flores de las aves.</td>
    </tr>

    <tr>
     <td> <img src="imagenes/4.jpg" alt="Flor del opio" width="200" height="200"></td>
     <td>Foto 4: Flor del opio.</td>
    </tr>
   
   <tr>
     <td><img src="imagenes/5.jpg" alt="Rosas" width="200" height="200"></td>
     <td>Foto 5: Rosas</td>
   </tr>

   <tr>
     <td><img src="imagenes/6.jpg" alt="Pensamiento" width="200" height="200"></td>
     <td>Foto 6: Pensamiento</td>
   </tr>
</table>
</section>

  <h1 style="color:red">
          <?php
                  echo 'Autor: Sergio Navarro Gonzalez';
          ?>
  </h1>
  
  <p><em>Copyright 2022, www.cesurformaion.com</em></p>

</body>
</html>
