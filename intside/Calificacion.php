<?php
    session_start();

    if (!isset($_SESSION["recMatricula"])) {
        header("Location: ../index.php");   
    }

    $recMatricula = $_SESSION["recMatricula"];
    $recEscuela = $_SESSION["recEscuela"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Calificacion</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="css/styleCalificacion.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/logo.ico">
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
                <h1><a href="#">Consulta de Calificaciones</a></h1>
                <p>en linea <a href="http://localhost/consultaCalificacion/index.html"></a></p>
                <li>Bienvenido | <form action="" method="post"><input type="submit" name="btnCerrar" value="Cerrar Sesion"></form></li>
            </div>
        </div>
    </div>
        <?php
        if(isset($_POST['btnCerrar']))
        {
            session_destroy();
            ?>
            <script language="javascript" type="text/javascript">
                alert('Adios, esperamos vuelvas pronto...');
                document.location.href = "../index.php";
            </script>  
            <?php   
        }
        ?> 
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="indexDentro.php">Inicio</a></li>
				<li class="current_page_item"><a href="#">Calificaciones</a></li>			
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
							<h2 class="title">Boleta de Calificaciones</h2>
							<div class="entry">
								<p>
                                <table width="701" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="805" style="color:#2483A6; font-family: Arial, Helvetica, sans-serif; font-size: 30px; font-weight:bold;">
                                        <hr style="margin: 0px" />
                                        <table width="701" border="0" align="center" style="color:#008D2D; font-size: 10px; font-weight:bold; font-family: Arial;">
                                          <tr style="background-color: #18B5C3;"  align="center">
                                            <td width="805">
                                            <form name="form1" method="post" action="">
                                            <a style="color:#FFF; font-size: 15px; font-weight:bold; font-family: Arial;">Selecciona Periodo Escolar: </a>
                                            <select name="comboseleccion">
                                            <?php
                                            $link = mysql_connect('localhost','root','');
                                            mysql_select_db($recEscuela, $link);
                                            
											
                                                $query="select periodo from calificacion where matricula='$recMatricula'";/*$rec*/
                                                $resultado = mysql_query($query);
                                                if ($resultado)
                                                {
                                                    while($renglon = mysql_fetch_array($resultado))
                                                    {
                                                        $valor=$renglon['periodo'];
                                                        
                                                        echo "<option value='$valor'>$valor</option>\n";
                                                    }
                                                }
                                            mysql_close($link);
                                            ?>
                                            </select>
                                            <label>
                                            <input type="submit" style="color: #FFF; background-color: #49A0EC; border-style: solid; font-family: Arial; border-width:1px; width: 3.5cm; font-weight: bold; font-size: 14px; padding: 2px 0px 2px 0px" name="inicia" value="Consultar">
                                            </label>
                                            </form>
                                            </td>
                                          </tr>
                                        </table>
                                      <hr style="margin: 0px" />
                                    <br />
                                    
                                    <table width="701" border="0" align="center">
                                      <tr>
                                      <? if(isset($_POST['inicia'])){ $valorCombo = trim($_POST['comboseleccion']); ?>
                                        <td align="center" colspan="28"><input type="button"  name="preview" value="Imprimir Boleta" 
                                   style="color: #FFF; background-color: #49A0EC; border-style: solid; font-family: Arial; border-width:1px; width: 3.5cm; font-weight: bold; font-size: 14px; padding: 2px 0px 2px 0px" id=1 onClick="window.open('doc.pdf','_blank','width=600, height=800,resizable=yes'); return false" /></td>
                                        </tr>
                                      <tr style="color:#FFFFFF; font-family: Arial; font-size:14px; font-weight:bold; background-color:#18B5C3;" align="center">
                                        <td width="400" rowspan="2" align="center" style="border-bottom:2px solid navy">Asignatura</td>
                                        <td width="65" rowspan="2" align="center" style="border-bottom:2px solid navy">No. Unidades</td>
                                        <td colspan="6" align="center">Unidades</div></td>
                                        <td width="87" rowspan="2" align="center" style="border-bottom:2px solid navy">Promedio Asignatura</td>
                                      </tr>
                                      <tr style="color:#FFFFFF; font-size:14px; font-family: Arial; font-weight:bold; background-color:#18B5C3;" align="center">
                                        <td width="21" align="center" style="border-bottom:2px solid navy">1</td>
                                        <td width="21" align="center" style="border-bottom:2px solid navy">2</td>
                                        <td width="18" align="center" style="border-bottom:2px solid navy">3</td>
                                        <td width="15" align="center" style="border-bottom:2px solid navy">4</td>
                                        <td width="20" align="center" style="border-bottom:2px solid navy">5</td>
                                        <td width="16" align="center" style="border-bottom:2px solid navy">6</td>
                                      </tr>
                                      <?
                                      $link2 = mysql_connect('localhost','root','');
                                      mysql_select_db($recEscuela, $link2);
                                    $mySql="select materia, unidades, unidad1, unidad2, unidad3, unidad4, unidad5, unidad6, periodo from calificacion where matricula='$recMatricula' and periodo='".$_POST['comboseleccion']."'";	
                                        
                                    $result = mysql_query( $mySql );
                                    
                                    if( mysql_num_rows($result)>0){
                                        $style1 = "style='font-size:14px'";
                                        $style2 = "font-family: Arial; font-size: 14px;";
                                        $style3 = "font-family: Arial; font-size: 14px; background-color:#D3EBFF;";
                                        $cont = 0;
                                        while(list($materia,$unidades,$u1,$u2,$u3,$u4,$u5,$u6)=mysql_fetch_array($result)){
                                            
                                            $prom=(($u1+$u2+$u3+$u4+$u5+$u6)/$unidades);
                                            $promedio = round($prom * 10) / 10;
                                                
                                            echo "<tr style=\"".((($cont+1) % 2 == 0) ? $style2 : $style3)."\">\n";
                                            echo "<td $style1>".$materia."</td>";
                                            echo "<td $style1 align=center>".$unidades."</td>";
                                            echo "<td $style1 align=center>".$u1."</td>";
                                            echo "<td $style1 align=center>".$u2."</td>";
                                            echo "<td $style1 align=center>".$u3."</td>";
                                            echo "<td $style1 align=center>".$u4."</td>";
                                            echo "<td $style1 align=center>".$u5."</td>";
                                            echo "<td $style1 align=center>".$u6."</td>";
                                            echo "<td $style1 align=center>".$promedio."</td>";
                                            echo "</tr>";
                                            $cont = $cont+1;
                                        }
                                        
                                        mysql_close($link2);
                                    }
                                }
                                ?>
                                    </table></td>
                                  </tr>
                                </table>
                                </p>
							</div>
						</div>
					  </div>
					<!-- end #content -->
				  <div id="sidebar">
					  <ul>
						  <li>
							  <h2>¡Bienvenido!</h2>
							  <table width="212" border="0">
							    <tr>
							      <td>&nbsp; &nbsp; &nbsp; &nbsp; </td>
							      <td>Hola bienvenido a la pagina de consulta de calificaciones en linea, en la cual podras consultar e imprimir tu historial academico o solo la boleta del Bimestre, Semestre o Cuatrimeste que desees. </td>
						        </tr>
						    </table>
							  <p>&nbsp;</p>
						  </li>
						  <li>
							  <h2>&nbsp;</h2>
					    </li>
				    </ul>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
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
