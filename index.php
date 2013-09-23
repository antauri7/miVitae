<!DOCTYPE html>
<html lang = "es">
<head>
    <title>:: skyCode ::</title>
    <meta charset = "utf-8"/>
    <meta name = "description" content="sitio hecho en Html5"/>
    <meta name = "viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="img/sky.png"/>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.min.js"></script>
    <script type="js/nkd7lxn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-10642278-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

<!--OTRA GALERIA-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 12000);
});
</script>
<!--FIN DE LA GALERIA-->



</head>

<!-- Inicia Formulario-->

<div id="containerTop ">
    <div class="sectionTop " id="home">
        <header class="clearfix">
            <div id="contact-form" style="display:none">
                <div id="form-wrapper">
                <a href="#" class="close">Cerrar Formulario</a> 
                    <form class="cmxform" id="commentform" name="a" method="post" action="http://www.headlampcreative.com/"  >
                        <div id="form">
                            <h2>Enviar un <strong>email</strong></h2>
                            <div class="input-name">
                            <label for="name">* Nombre:</label><br />
                            <input type="text" name="name" id="name" class="required">
                            </div>
                            <div class="input-email">
                            <label for="email">* Email:</label><br />
                            <input type="text" name="email" id="email" class="required">
                            </div>
                            <div class="input-message">
                            <label for="message">Mensaje:</label>
                            <textarea name="message" id="message" rows="8"></textarea>
                            </div>
                            <p><input type="submit" name="submit" class="submit" id="submit" value="Enviar Ahora!" /></p>
                        </div> <!-- fin form-->
                    </form> 
                    
                    <div id="form-sidebar">
                        <h3>Oficinas</h3>
                        <p><strong><a href="http://coworkgreenville.com">skyCode</a></strong>
                            105, El Bondho<br />
                            Mixquiahuala, Hgo. 42700</p>
                        <h3>Persigueme</h3>
                        <ul>
                            <li id="contact-twitter"><img src="img/angrybirds.png" width="60px" height="60px"><a href="https://twitter.com/#!/angelantauri7">Twitter</a></li>
                            <li id="contact-dribbble"><img src="img/cloud.png" width="60px" height="60px"><a href="http://dribbble.com/antauri7">Facebook</a></li>
                            <li id="contact-flickr"><img src="img/trabajo3.png" width="60px" height="60px"><a href="http://www.flickr.com/photos/35491575@N02/">Flickr</a></li>
                        </ul>
                    </div> <!-- fin form sidebar  -->
                    
                </div><!-- fin form wrapper -->
                
            </div> <!-- fin contact form -->
            
            <div id="header-inner" class="clearfix">
                <div id="contact-us">
                    <a class="closed" href="#">Contactanos</a>
                </div>  
            </div> <!-- fin header-inner -->
            
        </header> <!-- fin header -->
        
    </div> <!-- sectionTop -->
    
</div> <!-- containerTop --> 

<!-- Termina Formulario -->

<body>
      
      <nav id="nav">
      <img width="35" height="35" src="img/circArriba.png" alt="Menu skyCode">
      <h2 id="navhdr"><br/>MENU<br/><br/></h2>
      <ul id="navmenu">
       <li><a href="#home" tabindex="1">Home</a></li>
        <li><a href="#Escuela" tabindex="2">Mi Escuela</a></li>
        <li><a href="#ConoceMas" tabindex="3">Conoce mas</a></li>
        <li><a href="#QuienesSomos" tabindex="4">¿Quienes somos?</a></li>
        <li><a href="#Equipo" tabindex="5">Equipo de Trabajo</a></li>
      </ul>
      <img width="35" height="35" class="star" src="img/circBajo.png" alt="Menu skyCode">
    </nav>
    
    <center><div class="headerA">CONSULTA DE CALIFICACIONES</div><div class="headerB">   EN LINEA</div></center>
    
<div id="container">

    <div class="section" id="section-1"><br/>
    
    <div class="titulo"> <center>¡¡ Bienvenido !!</center></div>

        <div id="contentEscuela">

             <div class="home">
                <div class="fadein">
                    <img src="img/galeria1.png" style="width:850px; height:400px">
                    <img src="img/galeria2.png" style="width:850px; height:400px">
                    <img src="img/galeria3.png" style="width:850px; height:400px">
                    <img src="img/galeria4.png" style="width:850px; height:400px">
                </div>
            </div>



        </div>
    </div>
     <!-- fin de la seccion1 HOME -->

    <div class="section" id="Escuela"><br/><br/><br/>
  
        <div class="titulo">Mi Escuela</div> <br/>
        
            <div id="contentEscuela">
            
                <div id="loginEscuela">
                    <div class="barra"><div class="titleLog">Iniciar Sesión</div></div> <br/><br/>
                  <form action="" method="post">
                  <div class="tituloContenedor2">Institución </div>
                    <select name="escuela" style="width:220px; height:30px; font-size: 16px; color: #03F; border-radius:9px; border:solid #09F; text-align:center;">
                        <option value="nada">:: Selecciona tu escuela ::</option>
                            <option value="utvm">UTVM</option>
                            <option value="arturo">Esc. Prim. Gral. Arturo del Castillo</option>
                            <option value="david">Sec. Gral. Prof. David Noble</option>
                    </select>
                    <div class="tituloContenedor2">Usuario: </div>
                    <input name="txtUser" type="text" id="txtUser" style="width:220px; height:20px; font-size: 18px; color: #03F; border-radius:9px; border:solid #09F; text-align:center; " > 
                    <div class="tituloContenedor2">Contraseña: </div>
                    <p> <input name="txtPass" type="password" id="txtPass" style="width:220px; height:20px; font-size: 20px; color: #03F; border-radius:9px; border:solid #09F; text-align:center " > </p>
                    <p> <input type="submit" name="btnAccesar" id="btnAccesar" value="Accesar" style="width:150px; background:#46DAFF; height:30px; font-size: 20px; color: #03F; border-radius:9px; border:solid #09F; text-align:center "> </p>
                    </form>
                    
                </div>

                <?php
                if(isset($_POST['btnAccesar']))
                {
                    $escuela=trim($_POST['escuela']);
                    if($escuela == 'nada')
                    {
                        ?>
                            <script language="javascript" type="text/javascript">
                                alert('Error, Por favor Selecciona una Institución valida');
                            </script>
                        <?php
                    }
                    else if ($escuela || 0)
                    {
                        $conexion = mysql_connect('localhost','root','');
                        mysql_select_db($escuela, $conexion);

                        $matricula = trim($_POST['txtUser']);
                        $password = trim($_POST['txtPass']);

                        /*
                            Aqui meter la forma de Encriptacion para contraseñas...
                        */

                        $select = "select * from userAlumno where matricula='".$matricula."' and password='".$password."' ";
                        $query = mysql_query($select) or die ("Error en la comprobacion de los datos - Linea 186");
                        $valor = mysql_fetch_array($query);

                        $recMatricula = $valor['matricula'];
                    
                        session_start();
                        if (!isset($_SESSION["recMatricula"])) {
                            $_SESSION["recMatricula"] = $recMatricula; 
                            $_SESSION["recEscuela"] = $escuela;
                        }
                        ?>
                            <script language="javascript" type="text/javascript">
                                alert('¡¡ Bienvenido !!');
                                document.location.href = "intside/indexDentro.php";
                            </script>
                        <?php
                    }
                }
                ?>
                
                <div id="mapsGoogle">
                    <div class="ruta"> 
                        <center><label for="origen">Origen </label>
                                <input type="text" name="origen" id="origen" size="50" placeholder="calle, ciudad, estado..." style="width:220px; height:20px; font-size: 20px; color: #03F; border-radius:9px; border:solid #09F; text-align:center " >
                                
                                <div>
                                    <label for="destino">Destino</label>
                                    <select name="destino" id="destino" style="width:220px; height:30px; font-size: 16px; color: #03F; border-radius:9px; border:solid #09F; text-align:center;">
                                        <option value="COLONIA EL NITH, IXMIQUILPAN, HIDALGO">UTVM</option>
                                        <option value="AVENIDA 16 DE SEPTIEMBRE NUM. 58 COL. MIXQUIAHUALA 42700">David Noble</option>
                                        <option value="FRANCISCO VILLA NUM. 4 COL. EL BONDHO MIXQUIAHUALA 42700">Arturo del Castillo</option>
                                    </select>
                                </div>
                                
                                <div id="rutaOps">
                                    <select id="modo_viaje" class="opciones_ruta">
                                        <option value="DRIVING" selected="selected" visible="false">Auto</option>
                                        <option value="BICYCLING">Bicicleta</option>
                                        <option value="WALKING">Caminando</option>
                                    </select>
                                    <select id="tipo_sistema" class="opciones_ruta">
                                        <option value="METRIC" selected="selected">Métrico</option>
                                        <option value="IMPERIAL">Imperial</option>
                                    </select>
                                    <input type="button" id="buscar" value="Trazar ruta" style="width:150px; background:#46DAFF; height:30px; font-size: 20px; color: #03F; border-radius:9px; border:solid #039; text-align:center "><br />
                                <div>
                                    <div id="map_canvas" style="float:left; width:100%; height:305px"></div>
                                </div></center>
                    </div>
                </div>
            </div>
    </div><!-- fin de la seccion2 Mi Escuela-->

    <div class="section" id="ConoceMas">
    <br/><br/>
    <div class="titulo">Conoce Mas</div><br>
        <div id="areaConoceMas">
            <div class="galeriaConoceMas">
                <iframe src="http://player.vimeo.com/video/53476269?badge=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <div class="textoVideo">
                    La tecnología cada ves se integra mas a la vida cotidiana, llegara el momento en el cual 
                    será indispensable tener acceso a ella de forma directa o indirecta siempre realizando el 
                    consumo de ella para lograr un mejor estado de vida.
                    En la vida cotidiana como en la profesional la tecnología se ara mas imprescindible pues 
                    será una herramienta indispensable para las labores que realizamos comúnmente.
                </div>
            </div>
            <div class="infoGaleria">
                <div class="textoComentario">Que tal te parecio el Video</div><br>
                    <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                    <fb:comments href="www.0.facebook.com/angel7991" num_posts="4" width="320" height="450px"></fb:comments>
            </div>
        </div>
    </div> <!-- fin de la seccion3 Conoce mas-->

    <div class="section" id="QuienesSomos"> <br/> <br/>
    <div class="titulo"> ¿ Quienes Somos ? </div>
    
        <div id="contenedor1"> <br/>
            <div id="logo1">
            <div class="tituloContenedor"> Objetivo </div>
                <img src="img/sky.png"> <br/><br/>
                <div class="texto">
                Desarrollar un Sistema de Consulta de Calificaciones en Línea, que haga de ella un sistema de apoyo a todos los alumnos de nivel medio superior y superior que viven en comunidades lejanas a sus escuelas y que tienen un servicio de internet cerca de su casa, eso les facilitara consultar sus calificaciones y de esta manera no gastara tanto dinero como el que gasta al transportarse a la Universidad o Escuela en la que estudie.
                </div>
            </div>
            
            <div id="logo2">
            <div class="tituloContenedor"> Misión </div> <br/>
                <img src="img/sistema.png">
                <div class="texto2"><br/>
                    Crear y desarrollar nuestra propia empresa regional especialista en el diseño y desarrollo de software con calidad.<br/><br/><br/><br/><br/><br/><br/><br/><br/>
                
                </div>
             </div>
             
             <div id="logo3">
            <div class="tituloContenedor2"> De donde nace la idea </div> <br/>
                <img src="img/img08.jpg" width="210px" height="187px">
                <div class="texto3">
                La idea de realizar este proyecto nace de la misma necesidad de los alumnos de la universidad que viven en lugares alejados y requieren o necesitan consultar sus calificaciones en periodo de vacaciones y la información no se encuentra accesible en la institución educativa, de la misma forma se puede reducir el gasto monetario de los alumnos y también evitar la contaminación en el uso de papel. <br/><br/>
                </div>
             </div>
        </div> <br/>
    </div> <!-- fin de la seccion4 Quienes Somos-->
    
    <div class="section" id="Equipo">
  <br/><br/><br/>
    <div class="titulo">Nuestro Equipo</div><br/>
        <section id="team" class="clearfix">
            <ul>
                <li>
                    <div>
                        <h2>Dulce Maria - Kendi</h2>
                        <p>Lider de Proyecto</p>
                        <img src="img/maria.png" width="195" height="195" alt="kendi" />
                    </div>
                </li>
                <li>
                    <div>
                        <h2>Miguel Angel - Antauri</h2>
                        <p>Desarrollador</p>
                        <img src="img/cortado.png" width="195" height="195" alt="Antauri" />
                    </div>
                </li>
                <li>
                    <div>
                        <h2>Sonia</h2>
                        <p>Documentadora - SQA</p>
                        <img src="img/soni.png" width="195" height="195" alt="sonia" />
                    </div>
                </li>
                <li>
                    <div>
                        <h2>Monica</h2>
                        <p>Tester</p>
                        <img src="img/monica.png" width="195" height="195" alt="Monigota" />
                    </div>
                </li>
            </ul>
            

        </section>
        <br/><br/>  
      </div> <!-- fin de la seccion5 Nuestro Equipo-->
      
</div> <!-- Fin del Contenedor de textos-->
<footer>
        <div id="footer">
            <div class="fot1"></div>
            <div class="fot2"></div>
            <div class="fot3"></div>
            <div class="fot4">Sitio de Consulta de Calificaciones en Linea - Sitio web con licencia gratuita para la Esc. Sec. Gral. Profesor David Noble<br> Autores: Monica Medina Garcia - Sonia Mendoza Escobar - Dulce Maria Martinez Toribio - Miguel Angel Flores Bautista<br></div>
        </div>
</footer>

<script type="text/javascript" src="js/jquerymap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
<script type="text/javascript">
    var map;
    var directionsDisplay = new google.maps.DirectionsRenderer();
    var directionsService = new google.maps.DirectionsService();
    
    $(document).ready(function() {
        load_map();
    });
    
    function load_map() {
        var myLatlng = new google.maps.LatLng(20.68009, -101.35403);
        var myOptions = {
            zoom: 4,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#map_canvas").get(0), myOptions);
    }
    
    function rockAndRoll(){
        var request = {
                origin: $('#origen').val(),
                destination: $('#destino').val(),
                travelMode: google.maps.DirectionsTravelMode[$('#modo_viaje').val()],
                unitSystem: google.maps.DirectionsUnitSystem[$('#tipo_sistema').val()],
                provideRouteAlternatives: true
        };
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setMap(map);
                directionsDisplay.setPanel($("#panel_ruta").get(0));
                directionsDisplay.setDirections(response);
            } else {
                alert("No existen rutas entre ambos puntos");
            }
        });
    }
    
    $('#buscar').live('click', function(){
        rockAndRoll();
    });

    $('.opciones_ruta').live('change', function(){
        rockAndRoll();
    });

</script>

 <script type="text/javascript">
        var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.worryfreelabs.com/" :        "http://analytics.worryfreelabs.com/");
        document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
        
    <script type="text/javascript">
    try {
        var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
        piwikTracker.trackPageView();
        piwikTracker.enableLinkTracking();
    } catch( err ) {}
    </script> <!-- script funcional de equipo -->

    <script src="js/jquery.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script>
    $(document).ready(function() {
      $('#nav').onePageNav({
        filter: ':not(.external)',
        scrollThreshold: 0.25
      });
      
    });
    </script>
    
    <script type="text/javascript"> 
        $(document).ready(function(){
        $("#contact-us a").click(function(e){
            $("#contact-form").slideToggle(400);
            $(this).toggleClass("open");
            e.preventDefault();
        });
        $("a.close").click(function(e){
            $("#contact-form").slideToggle(400);
            $("#contact-us a").toggleClass("open");
            e.preventDefault();
        });
        }); 
    </script> 
        
    <script type="text/javascript">
        $(document).ready(function() {
            $("#commentform").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            }
            });             
        });     
   </script> <!-- script de navegacion y formulario -->


    
</body>
</html>