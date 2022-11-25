<!DOCTYPE html>
<html>
<head>
	<title>PCBuilder</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<main class="container-fluid">
	 <header>
        <section class="row">
            <a class="col-2" href="paginaInicial.php" ><img id="logo" src="img/Logo.png" width="190px" height="70px"></a>
            <label for="imput"class="col-5" id="buscar">
                    <input type="text" class="form-control" name="form" placeholder="Buscar">
                    
                </label>
                
            <section id="sec2" class="col-2">
                <?php
            	session_start();
            	if (!isset($_SESSION['login'])) {
            		
            		echo"<a href='iniciarUser.php'>Iniciar sesion</a> ";

            	}else{
				
            		echo("<a href='usuario.php'>"."<button id='sesion'>".$_SESSION['login'])."</button>"."</a>";
					
			        
            	}
            	 
            	?>
            </section>
            <section id="sec2" class="col-2">
            <?php 
            if (!isset($_SESSION['login'])) {
            	echo"<a id='inicio' href='iniciarUser.php'>Ver Carro</a>";
            }else{
            	echo "<a id='inicio' href='usuario.php' >Ver Carro</a>";
            }
            ?>
           
            </section>    
        </section>
        <nav class="row">
            
            <ul id="nav"><a href="componentes.php">Componentes</a></ul>
            <ul id="nav"><a href="ordenadores.php">Ordenador</a></ul>
            <ul id="nav" ><a href="gaming.php">Gaming</a></ul>
            <ul id="nav" ><a href="periféricos.php">Periféricos</a></ul>
            <ul id="nav" >Ofertas</ul>

        </nav>
    </header>

	<main id="comp" class="row">
        <section class="container">
            <section class="text-center" id="portAviso">
               <h1>AVISO LEGAL</h1>
        <h5>Nuestro aviso legal forma parte del compromiso mutuo por un uso adecuado de contenidos y servicios,
        así como de la propiedad industrial e intelectual de PCBUILDER.</h5>
           </section> 
        <section>
            <h2>I. INFORMACIÓN GENERAL</h2> 

        <p id="textopequeñoinfo">En cumplimiento con el deber de información dispuesto en la Ley 34/2002 de Servicios de la Sociedad de la Información y el Comercio Electrónico (LSSI-CE) de 11 de julio, se facilitan a continuación los siguientes datos de información general de este sitio web:

            La titularidad de este sitio web, pcbuilder.com, (en adelante, Sitio Web) la ostenta: David Fabregat & Toni Boné, con NIF: 26756453E, y cuyos datos de contacto son:
            
            Dirección: C / Monlau La Sagrera
            
            Teléfono de contacto: 955644473
            
            Email de contacto: </p>
        </section>
        <section>
            <h2>II. TÉRMINOS Y CONDICIONES GENERALES DE USO</h2>

            <h3>El objeto de las condiciones: El Sitio Web</h3>
            <p id="textopequeñoinfo2">El objeto de las presentes Condiciones Generales de Uso (en adelante, Condiciones) es regular el acceso y la utilización del Sitio Web. A los efectos de las presentes Condiciones se entenderá como Sitio Web: la apariencia externa de los interfaces de pantalla, tanto de forma estática como de forma dinámica, es decir, el árbol de navegación; y todos los elementos integrados tanto en los interfaces de pantalla como en el árbol de navegación (en adelante, Contenidos) y todos aquellos servicios o recursos en línea que en su caso ofrezca a los Usuarios (en adelante, Servicios).

                PC BUILDER se reserva la facultad de modificar, en cualquier momento, y sin aviso previo, la presentación y configuración del Sitio Web y de los Contenidos y Servicios que en él pudieran estar incorporados. El Usuario reconoce y acepta que en cualquier momento PC BUILDER pueda interrumpir, desactivar y/o cancelar cualquiera de estos elementos que se integran en el Sitio Web o el acceso a los mismos.
                
                El acceso al Sitio Web por el Usuario tiene carácter libre y, por regla general, es gratuito sin que el Usuario tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo relativo al coste de conexión a través de la red de telecomunicaciones suministrada por el proveedor de acceso que hubiere contratado el Usuario.
                
                La utilización de alguno de los Contenidos o Servicios del Sitio Web podrá hacerse mediante la suscripción o registro previo del Usuario.</p>
    
            <h3>El Usuario</h3>
            <p id="textopequeñoinfo2">El acceso, la navegación y uso del Sitio Web, así como por los espacios habilitados para interactuar entre los Usuarios, y el Usuario y PC BUILDER, como los comentarios y/o espacios de blogging, confiere la condición de Usuario, por lo que se aceptan, desde que se inicia la navegación por el Sitio Web, todas las Condiciones aquí establecidas, así como sus ulteriores modificaciones, sin perjuicio de la aplicación de la correspondiente normativa legal de obligado cumplimiento según el caso. Dada la relevancia de lo anterior, se recomienda al Usuario leerlas cada vez que visite el Sitio Web.

                El Sitio Web de PC BUILDER proporciona gran diversidad de información, servicios y datos. El Usuario asume su responsabilidad para realizar un uso correcto del Sitio Web. Esta responsabilidad se extenderá a:</p><br><br>
            
            <li>Un uso de la información, Contenidos y/o Servicios y datos ofrecidos por PC BUILDER sin que sea contrario a lo dispuesto por las presentes Condiciones, la Ley, la moral o el orden público, o que de cualquier otro modo puedan suponer lesión de los derechos de terceros o del mismo funcionamiento del Sitio Web.</li><br>
            <li>La veracidad y licitud de las informaciones aportadas por el Usuario en los formularios extendidos por PC BUILDER para el acceso a ciertos Contenidos o Servicios ofrecidos por el Sitio Web. En todo caso, el Usuario notificará de forma inmediata a PC BUILDER acerca de cualquier hecho que permita el uso indebido de la información registrada en dichos formularios, tales como, pero no solo, el robo, extravío, o el acceso no autorizado a identificadores y/o contraseñas, con el fin de proceder a su inmediata cancelación.</li>
            
            <p id="textopequeñoinfo2">PC BUILDER se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la ley, el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos, spamming, que atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio, no resultaran adecuados para su publicación.

                En cualquier caso, PC BUILDER no será responsable de las opiniones vertidas por los Usuarios a través de comentarios u otras herramientas de blogging o de participación que pueda haber.
                
                El mero acceso a este Sitio Web no supone entablar ningún tipo de relación de carácter comercial entre PC BUILDER y el Usuario.
                
                Siempre en el respeto de la legislación vigente, este Sitio Web de PC BUILDER se dirige a todas las personas, sin importar su edad, que puedan acceder y/o navegar por las páginas del Sitio Web.</p>
            
        </section>
        <section>
            <h2>III. ACCESO Y NAVEGACIÓN EN EL SITIO WEB: EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD</h2><br>    
    
            <p id="textopequeñoinfo2">PC BUILDER no garantiza la continuidad, disponibilidad y utilidad del Sitio Web, ni de los Contenidos o Servicios. PC BUILDER hará todo lo posible por el buen funcionamiento del Sitio Web, sin embargo, no se responsabiliza ni garantiza que el acceso a este Sitio Web no vaya a ser ininterrumpido o que esté libre de error.

                Tampoco se responsabiliza o garantiza que el contenido o software al que pueda accederse a través de este Sitio Web, esté libre de error o cause un daño al sistema informático (software y hardware) del Usuario. En ningún caso PC BUILDER será responsable por las pérdidas, daños o perjuicios de cualquier tipo que surjan por el acceso, navegación y el uso del Sitio Web, incluyéndose, pero no limitándose, a los ocasionados a los sistemas informáticos o los provocados por la introducción de virus.
                
                PC BUILDER tampoco se hace responsable de los daños que pudiesen ocasionarse a los usuarios por un uso inadecuado de este Sitio Web. En particular, no se hace responsable en modo alguno de las caídas, interrupciones, falta o defecto de las telecomunicaciones que pudieran ocurrir.</p>
        
        </section>
        <section>
            <h2>IV. POLÍTICA DE ENLACES</h2><br>
            <p id="textopequeñoinfo2">Se informa que el Sitio Web de PC BUILDER pone o puede poner a disposición de los Usuarios medios de enlace (como, entre otros, links, banners, botones), directorios y motores de búsqueda que permiten a los Usuarios acceder a sitios web pertenecientes y/o gestionados por terceros.

                La instalación de estos enlaces, directorios y motores de búsqueda en el Sitio Web tiene por objeto facilitar a los Usuarios la búsqueda de y acceso a la información disponible en Internet, sin que pueda considerarse una sugerencia, recomendación o invitación para la visita de los mismos.
                
                PC BUILDER no ofrece ni comercializa por sí ni por medio de terceros los productos y/o servicios disponibles en dichos sitios enlazados.
                
                Asimismo, tampoco garantizará la disponibilidad técnica, exactitud, veracidad, validez o legalidad de sitios ajenos a su propiedad a los que se pueda acceder por medio de los enlaces.
                
                PC BUILDER en ningún caso revisará o controlará el contenido de otros sitios web, así como tampoco aprueba, examina ni hace propios los productos y servicios, contenidos, archivos y cualquier otro material existente en los referidos sitios enlazados.
                
                PC BUILDER no asume ninguna responsabilidad por los daños y perjuicios que pudieran producirse por el acceso, uso, calidad o licitud de los contenidos, comunicaciones, opiniones, productos y servicios de los sitios web no gestionados por PC BUILDER y que sean enlazados en este Sitio Web.
                
                El Usuario o tercero que realice un hipervínculo desde una página web de otro, distinto, sitio web al Sitio Web de PC BUILDER deberá saber que:
                
                No se permite la reproducción —total o parcialmente— de ninguno de los Contenidos y/o Servicios del Sitio Web sin autorización expresa de PC BUILDER.
                
                No se permite tampoco ninguna manifestación falsa, inexacta o incorrecta sobre el Sitio Web de PC BUILDER, ni sobre los Contenidos y/o Servicios del mismo.
                
                A excepción del hipervínculo, el sitio web en el que se establezca dicho hiperenlace no contendrá ningún elemento, de este Sitio Web, protegido como propiedad intelectual por el ordenamiento jurídico español, salvo autorización expresa de PC BUILDER.
                
                El establecimiento del hipervínculo no implicará la existencia de relaciones entre PC BUILDER y el titular del sitio web desde el cual se realice, ni el conocimiento y aceptación de PC BUILDER de los contenidos, servicios y/o actividades ofrecidas en dicho sitio web, y viceversa.</p>
        
        </section>
        <section>
            <h2>V. PROPIEDAD INTELECTUAL E INDUSTRIAL</h2><br>
                <p id="textopequeñoinfo2">PC BUILDER por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del Sitio Web, así como de los elementos contenidos en el mismo (a título enunciativo y no exhaustivo, imágenes, sonido, audio, vídeo, software o textos, marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.). Serán, por consiguiente, obras protegidas como propiedad intelectual por el ordenamiento jurídico español, siéndoles aplicables tanto la normativa española y comunitaria en este campo, como los tratados internacionales relativos a la materia y suscritos por España.

                    Todos los derechos reservados. En virtud de lo dispuesto en la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de PC BUILDER.
                    
                    El Usuario se compromete a respetar los derechos de propiedad intelectual e industrial de PC BUILDER. Podrá visualizar los elementos del Sitio Web o incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, exclusivamente, para su uso personal. El Usuario, sin embargo, no podrá suprimir, alterar, o manipular cualquier dispositivo de protección o sistema de seguridad que estuviera instalado en el Sitio Web.
                    
                    En caso de que el Usuario o tercero considere que cualquiera de los Contenidos del Sitio Web suponga una violación de los derechos de protección de la propiedad intelectual, deberá comunicarlo inmediatamente a PC BUILDER a través de los datos de contacto del apartado de INFORMACIÓN GENERAL de este Aviso Legal y Condiciones Generales de Uso.</p><br>
        
        </section>
        <section>
            <h2>VI. ACCIONES LEGALES, LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h2><br>
                 
            <p id="textopequeñoinfo2">PC BUILDER se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del Sitio Web y Contenidos, o por el incumplimiento de las presentes Condiciones.

                La relación entre el Usuario y PC BUILDER se regirá por la normativa vigente y de aplicación en el territorio español. De surgir cualquier controversia en relación con la interpretación y/o a la aplicación de estas Condiciones las partes someterán sus conflictos a la jurisdicción ordinaria sometiéndose a los jueces y tribunales que correspondan conforme a derecho.
                
                Este documento de Aviso Legal y Condiciones Generales de uso del sitio web ha sido creado mediante el generador de plantilla de aviso legal y condiciones de uso online el día 24/11/2022.</p>
            
        </section>
        </section>
           


	</main>
	<footer class="row" id="footer">
        <section class="col-4">
            <h4>Contactános</h4>
    <ul>
        <li>Calle Monlau</li>
        <li>pcbuilder@gmail.com</li>
        <li>602934485</li>
        <li><a href="AboutUs.php" id="contacto">Quienes somos</a></li>
        <li><a href="AvisoLegal.php" id="contacto">Aviso legal</a></li>
    </ul>
        </section>
         <section class="col-4">
            <h4>Siguenos</h4>
            <section class="row">
            	<img id="redes" class="col-2" src="img/insta.png">
    			<img id="redes" class="col-2" src="img/facebook.png">
    			<img id="redes" class="col-2" src="img/twiter.png">
    			<img id="redes" class="col-2" src="img/link.png">
            </section>
    	
        </section>
    
</footer>
</main>
		<script src="JavaScript.js"></script>
</body>
</html>



