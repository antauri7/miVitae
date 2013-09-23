<!DOCTYPE html>
<html lang = "es">
<head>
	<title>:: skyCode ::</title>
	<meta charset = "utf-8"/>
    <meta name = "description" content="sitio hecho en Html5"/>
	<meta name = "viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="img/sky.png"/>
	<link rel="author" type="text/plain" href="humano.txt"/>
    <link rel="stylesheet" href="css/servicio.css">
</head>

<nav id="nav">
      <img width="35" height="35" src="img/circArriba.png" alt="Menu skyCode">
      <h2 id="navhdr"><a href="index.php">Regresar</a></h2>
      <img width="35" height="35" class="star" src="img/circBajo.png" alt="Menu skyCode">
</nav>

<body>
	<div id="loginServicio">
		<div class="barra"><div class="titleLog">Iniciar Sesión</div></div> <br/><br/>
		<form action="" method="post">
            <div class="tituloContenedor2">Institución </div>
            <select name="select" style="width:220px; height:30px; font-size: 16px; color: #03F; border-radius:9px; border:solid #09F; text-align:center;">
			<option>:: Selecciona tu escuela ::</option>
				<option value="1">UTVM</option>
				<option value="2">Esc. Prim. Gral. Arturo del Castillo</option>
				<option value="3">Sec. Gral. Prof. David Noble</option>
			</select>
            <div class="tituloContenedor2">Usuario: </div>
            <input name="txtUser" type="text" id="txtUser" style="width:220px; height:20px; font-size: 18px; color: #03F; border-radius:9px; border:solid #09F; text-align:center; " > 
            <div class="tituloContenedor2">Contraseña: </div>
            <p> <input name="txtPass" type="password" id="txtPass" style="width:220px; height:20px; font-size: 20px; color: #03F; border-radius:9px; border:solid #09F; text-align:center " > </p>
            <p> <input type="submit" name="btnAccesar" id="btnAccesar" value="Accesar" style="width:150px; background:#46DAFF; height:30px; font-size: 20px; color: #03F; border-radius:9px; border:solid #09F; text-align:center "> </p>
        </form>
	</div>
	<footer>
        <div class="fot4">Sitio de Consulta de Calificaciones en Linea - Copyrigth SkyCode S.A de C.V - Web Master <a href="facebook.com/miguel1991"> Miguel Angel Flores Bautista </a></div>
	</footer> 
</body>