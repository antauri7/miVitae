<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Consulta de Calificaciones en Linea</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="../images/logo.ico">
<style type="text/css">
<!--
.Estilo5 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Consulta de Calificaciones</a></h1><li>Bienvenido | <a href="">Cerrar Sesion</a></li>
				<p>en linea <a href="http://localhost/consultaCalificacion/index.html"></a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Inicio</a></li>
				<li><a href="calificacion.php">Calificaciones</a></li>				
				<li><a href="Escuelas.php">Escuelas</a></li>
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
							<h2 class="title"><a href="#">Objetivo</a></h2>
							<div class="entry">
								<p><a href="#"><img src="../images/logo_bueno.png" width="186" height="186" alt="" class="alignleft border" /></a> Desarrollar un Sistema de Consulta de Calificaciones en Línea, que haga de ella un sistema de apoyo a  todos los alumnos de nivel medio superior y superior que viven en comunidades lejanas a sus escuelas y que tienen un servicio de internet cerca de su casa, eso les facilitara consultar sus calificaciones y de esta manera no gastara tanto dinero como el que gasta al transportarse a la Universidad o Escuela en la que estudie.</p>
							</div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">MisiÓn</a></h2>
							<div class="entry">
								<p><a href="#"><img src="../images/img09.jpg" width="186" height="186" alt="" class="alignleft border" /></a>Crear y desarrollar  nuestra propia empresa regional especialista en el diseño y desarrollo de  software con calidad.</p>
								<p><h2 class="title"><a href="#">VisiÓn</a></h2></p>
								<p>Consolidarse como una organización líder en el desarrollo de software, con normas y estándares nacionales en el desarrollo.</p>
						  </div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">¿De donde nace la idea?</a></h2>
							<div class="entry">
								<p><a href="#"><img src="../images/img08.jpg" width="186" height="186" alt="" class="alignleft border" /></a>La idea de realizar este proyecto nace de la misma  necesidad de los alumnos de la universidad que viven en lugares alejados y  requieren o necesitan consultar sus calificaciones en periodo de vacaciones y  la información no se encuentra accesible en la institución educativa, de la  misma forma se puede reducir el gasto monetario de los alumnos y también evitar  la contaminación en el uso de papel.</p>
						  </div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
								<h2>Iniciar SesiÓn</h2>
								<p>
								<form name="Login_Barra" method="post">
									<table width="100" border="0">
									  <tr>
									    <td colspan="2"><label>
									      <div align="center">
									        <select id="escuela" name="escuela">
									          <option value="0">Selecciona tu escuela</option>
											  <option value="utvm">UTVM</option>
											  <option value="arturo">Escuela Primaria Gral. Arturo del Castillo</option>
											  <option value="david">Secundaria Gral. Prof. David Noble</option>
								            </select>
								          </div>
									    </label></td>
								      </tr>
									  <tr>
										<td><span class="Estilo5">Usuario</span></td>
										<td><label>
										  <input type="text" name="user" />
										</label></td>
									  </tr>
									  <tr>
										<td><span class="Estilo5">Contraseña</span></td>
										<td><input type="password" name="pass" /></td>
									  </tr>
									  <tr>
										<td>&nbsp;</td>
										<td><label>
										  <div align="right">
										    <input type="submit" id="logeo" name="inicia" value="Iniciar Sesión" />
									      </div>
										</label></td>
									  </tr>
								  </table>
								</form>
								</p>
							</li>
							<li>
								<h2>Buscar Escuela </h2>
								<ul>
									<table width="260" border="0">
									<tr>
										<td>
										  <div align="left" class="Estilo5">◘ Primero Selecciona la institucion a la cula desea visitar.								        </div></td>
									</tr>
									  <tr>
										<td><form action="" method="post" name="form1" class="Estilo5" id="form1">
										  <input type="radio" name="utvm" value="COLONIA EL NITH, IXMIQUILPAN, HIDALGO" />
								          <span class="post ">UTVM<br />
								          <input type="radio" name="utvm" value="AVENIDA 16 DE SEPTIEMBRE NUM. 58 COL. MIXQUIAHUALA 42700" />
										  Esc. Sec. Gral. Prof. David Noble<br />
										  <input type="radio" name="utvm" value="FRANCISCO VILLA NUM. 4 COL. EL BONDHO MIXQUIAHUALA 42700" />
										  Primaria Gral. Arturo del Castillo</span><br />
										  <div align="center"><br />
										    <input type="submit" name="ok" value="Seleccionar Institucion" />
									      </div>
										</form>
										  <span class="Estilo5">
										  <?php
											if(isset($_POST['ok']))
											{
												$selectEscuela = trim($_POST["utvm"]);
											}
										?>
									    </span></td>
									  </tr>
									  <tr>
										<td>
										  <div align="left"><span class="post Estilo5"><br />
								        ◘ Ahora escribe la direccion de tu hubicacion actual. </span></div></td>
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
						    <li></li>
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
<?php
	if(isset($_POST['inicia']))
	{
	$selectEscuela = trim($_POST["escuela"]);
	
		$conexion= mysql_connect("localhost","root","") or die ("imposible realizar conexión con el servidor");
		mysql_select_db($selectEscuela, $conexion);
		$usuario = trim($_POST["user"]);
		$password = trim($_POST["pass"]);
		
		$Mysql = "Select * from usuarios where usuario='".$usuario."' and password='".$password."'";
		$query = mysql_query($Mysql) or die (mysql_error());
		$result = mysql_fetch_assoc($query);
		if(mysql_num_rows($query)>0)
		{		
		?>
			<script language="javascript" type="text/javascript">
				alert('Logueado Correctamente : Bienvenido');
			</script>
		<?php
		}
		else
		{
		?>
			<script language="javascript" type="text/javascript">
				alert('Error Vuelvelo a intentar');
			</script>
		<?php
		}
		
	}
?>
</body>
</html>