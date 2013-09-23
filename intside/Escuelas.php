<?php
$rec = $_COOKIE['recusuario'];
$recBase = $_COOKIE['recuBase'];
$nombre = $_COOKIE['usuariocook'];
if ($nombre == "")
{
	header("LOCATION: ../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Conoce mas Escuelas</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="../images/logo.ico">
<style type="text/css">
<!--
.Estilo3 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Consulta de Calificaciones</a></h1><li>Bienvenido | <a href="logout.php">Cerrar Sesion</a></li>
				<p>en linea <a href="http://localhost/consultaCalificacion/index.html"></a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="indexDentro.php">Inicio</a></li>
				<li><a href="Calificacion.php">Calificaciones</a></li>			
				<li class="current_page_item"><a href="#">Escuelas</a></li>
			</ul>
		</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="http://www.utvm.edu.mx/">UTVM </a></h2>
							<p class="meta">CARR. IXMIQUILPAN-CAPULA KM. 4, COLONIA EL NITH, IXMIQUILPAN, HGO., C.P. 42300</p>
							<div class="entry">
								<p><a href="http://www.utvm.edu.mx/"><img src="../images/utvm.png" width="186" height="186" alt="" class="alignleft border" /></a>Somos una institución pública  de nivel superior que ofrece servicios educativos y tecnológicos, que promueven el desarrollo sustentable, comprometidos con la formación de seres humanos con sentido de identidad y valores, a través del desarrollo de competencias basado en la investigación y la vinculación.</p>
							</div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">Sec. Gral. Prof. David Noble </a></h2>
							<p class="meta">AVENIDA 16 DE SEPTIEMBRE NUM. 58 COL.   MIXQUIAHUALA 42700</p>
							<div class="entry">
								<p><a href="#"><img src="../images/david.jpg" width="186" height="186" alt="" class="alignleft border" /></a>Somos una institución pública  de nivel superior que ofrece servicios educativos y tecnológicos, que promueven el desarrollo sustentable, comprometidos con la formación de seres humanos con sentido de identidad y valores, a través del desarrollo de competencias basado en la investigación y la vinculación.</p>
						  </div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">Primaria Arturo del Castillo </a></h2>
							<p class="meta">FRANCISCO VILLA NUM. 4 COL. EL BONDHO MIXQUIAHUALA 42700</p>
							<div class="entry">
								<p><a href="#"><img src="../images/reparacion.jpg" width="186" height="186" alt="" class="alignleft border" /></a>Somos una institución pública  de nivel superior que ofrece servicios educativos y tecnológicos, que promueven el desarrollo sustentable, comprometidos con la formación de seres humanos con sentido de identidad y valores, a través del desarrollo de competencias basado en la investigación y la vinculación.</p>
						  </div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
				  <div id="sidebar">
					  <ul>
						  <li>
							  <h2>¡Bienvenido!</h2>
							  <p>Hola bienvenido a la pagina de consulta de calificaciones en linea, en la cual podras consultar e imprimir tu historial academico o solo la boleta del Bimestre, Semestre o Cuatrimeste que desees.</li>
						  <li>
							  <h2>Buscar Escuela </h2>
							  <ul>
								  <table width="260" border="0">
									<tr>
										<td>
										  <div align="left" class="Estilo3">Primero Selecciona la institucion a la cula desea visitar.								        </div></td>
									</tr>
								    <tr>
									  <td><form id="form1" name="form1" method="post" action="">
									    <span class="Estilo3">
							            <input type="radio" name="utvm" value="COLONIA EL NITH, IXMIQUILPAN, HIDALGO" />
							            UTVM<br />
							            <input type="radio" name="utvm" value="AVENIDA 16 DE SEPTIEMBRE NUM. 58 COL. MIXQUIAHUALA 42700" />
									    Esc. Sec. Gral. Prof. David Noble<br />
									    <input type="radio" name="utvm" value="FRANCISCO VILLA NUM. 4 COL. EL BONDHO MIXQUIAHUALA 42700" />
									    Primaria Gral. Arturo del Castillo</span><br />
									    <br />
									    <div align="center">
									      <input type="submit" name="ok" value="Seleccionar Institucion" />
								          <br />
									    </div>
										</form>
									  <?php
											if(isset($_POST['ok']))
											{
												$selectEscuela = trim($_POST["utvm"]);
											}
										?></td>
								    </tr>
								    <tr>
									  <td>
									    <div align="left" class="Estilo3"><br />
							          Ahora escribe la direccion de tu hubicacion actual.								        </div></td>
								    </tr>
								    <tr>
									  <td><form style="margin:0px;padding:0px 2px 2px 2px;text-align:left;" action='http://maps.google.com.mx/maps' method='get' target='_blank'>
										  
									    <div align="center">
									      <input style="width:98%" type='text' name='saddr' value='Calle, Municipio, Estado' onfocus="this.value = ''" />
									      <br /><br />
									      <input type='hidden' name='daddr' value='<?php echo $selectEscuela ?>' />
										    <input type='submit' name="ir" value='Marcar Ruta' />
								        </div>
									  </form></td>
								    </tr>
								  </table>
							  </ul>
						  </li>
				    </ul>
				  </div>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 https://www.calificacionenlinea.com All rights reserved. Design by <a href="https://www.facebook.com/angel7991"> CSS Antauri</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
