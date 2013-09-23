<form action="" method="post" name="form1" class="Estilo5" id="form1">
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
								        Ahora escribe la direccion de tu hubicacion actual. </span></div></td>
									  </tr>
									  <tr>
										<td><form style="margin:0px;padding:0px 2px 2px 2px;text-align:left;" action='http://maps.google.com.mx/maps' method='get' target='_blank'>

										  <div align="center">
										    <input style="width:98%" type='text' name='saddr' value='Calle, Municipio, Estado' onfocus="this.value = ''" />
										    <br /><br />
										    <input type='hidden' name='daddr' value='<?php echo $selectEscuela ?>' />
											  <input type='submit' name="ir" value='Marcar Ruta' />
									        </div>
										</form>