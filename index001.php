
<!DOCTYPE html>
<html lang="es"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="DBOavmT6TVfUl2Tgs-1ttMaLtg0OZP6zqbLJZf3i-Ow" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prueba de Firma Digital</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/loading.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google analytics start -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76222251-1', 'auto');
        ga('require', 'linkid');
        ga('send', 'pageview');
    </script>
    <!-- Google analytics end -->
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//www.4identity.eu/analytics/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//www.4identity.eu/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
</head>
	
	       
  

	<body>
	<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MHKJG3"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MHKJG3');</script>
	<!-- End Google Tag Manager -->
	<div class="content">
		

<div class="col-xs-12" id="rowheader">
    <div class="col-xs-12 bgblue">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 text-right">
                        <div class="menu">
                <a class="menuBtn" href="home.php">Inicio</a>
                <a class="menuBtn menuActive" href="sign.php">Firmar</a>
                <a class="menuBtn" href="api.php">API</a>
                <a class="menuBtn" href="companies.php">Clientes</a>
            </div>
            <div class="lang" style="display: inline;">
                <a href="index.php?url=sign.php&idiom=en" ><img src="img/en.png" alt="Imagen del boton para cambiar el idioma a Español"/></a>
                <a href="index.php?url=sign.php&idiom=es" ><img src="img/es.png" alt="Imagen del boton para cambiar el idioma a Inglés"/></a>
            </div>
        </div>
    </div>
    <div class="col-xs-8 col-xs-offset-2 menuSeparatorTop">
        <a href="home.php" class="logo_id"><img src="img/Bit4id.png" alt="Imagen del logo de bit4id"/></a>
    </div>
</div>		<div class="col-xs-8 col-xs-offset-2 text-center description">
				<h1 class="title">INSTALACIÓN Y FIRMA</h1>
				<h2 class="subtitle"><strong>Siga las instrucciones mostradas a continuación.</strong></h2>
		</div>
		<div class="col-xs-12 lightGrey">
			<div class="col-sm-3 separationLeft">
				<p class="instructionTitle"><img src="img/1.png" class="img-responsive" alt="Imagen que indica el primer paso del proceso de firma"/></p>
				<p class="helpInfo">Una vez finalizada la descarga, instale el cliente siguiendo los pasos que se indican.</p>
			</div>
			<div class="col-sm-6 mainContent text-center">
				<p class="instructionTitle">Antes de continuar, asegúrese de haber instalado el cliente 4identity </p>
				<div class="col-sm-12 text-center helpDiv">
					<img class="imghelp" src="img/help.png" alt="Imagen que indica el primer paso del proceso de firma"/>
					<span class="texthelp">PULSE AQUÍ PARA DESCARGAR EL CLIENTE</span>
				</div>
			</div>
			<div class="col-sm-6 platformMessage text-center">
				<p class="text-red"></p>
			</div>
		</div>
		
		<div class="col-xs-12 white">
			<div class="col-sm-3 separationLeft">
				<p class="instructionTitle"><img src="img/2.png" class="img-responsive" alt="Imagen que indica el segundo paso del proceso de firma"></p>
				<p class="helpInfo">Seleccione el archivo que desea firmar desde su PC o introduzca la URL donde se encuentra</p></div>
			<div class="col-sm-6 mainContent text-center">
				<div id="fileInputs">
					<p class="instructionTitle">Seleccione el archivo a firmar o la URL del mismo</p>
					<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
					  	<div class="col-sm-10 col-sm-offset-1 separationTop">
							<div class="input-group">
								<span class="input-group-btn">
									<div class="btn btn-bit4ID btn-file">
										Seleccionar&hellip; <input id="fileselectInputLocal" type="file" />
									</div>
								</span>
								<input type="text" class="form-control" id="localInputText" readonly>
							</div>
						</div>
						<div class="col-sm-10 col-sm-offset-1 separationTop">
							<input id="fileselectInputRemote" placeholder="URL del archivo" class="form-control" type="url" />
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-sm-offset-3" id="fileLoading" style="display:none">
						<p class="instructionTitle">Por favor, espere mientras detectamos el cliente</p>
						<div class="loader"></div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 lightGrey">
			<div class="col-sm-3 separationLeft">
				<p class="instructionTitle"><img src="img/3.png" class="img-responsive" alt="Imagen que indica el tercer paso del proceso de firma"/></p>
				<p class="helpInfo">¡Firma!</p>
			</div>
			<div class="col-sm-6 mainContent text-center">
				<form class="bit4id-sign" method="post" action="https://www.4identity.eu/sign-ok.php">
					<div class="bit4id-signReq"></div>
					<div id="bit4id-status" style="display:none"></div>
					<input id="btnSubmit" class="btn btn-lg btn-bit4ID signBtn" type="submit" disabled="disabled" value="Firmar" />
					<p class="signBtn">Pulsando en firmar acepto las <u><a target='_blank' href='files/4identity_Condiciones_ES.pdf'>condiciones del servicio</a></u></p>
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-6 col-sm-offset-3 errormessage text-center">
				<p class="text-red">No hemos podido detectar el cliente 4identity, las descarga del cliente se iniciará automáticamente. Asegúrese de tener el cliente instalado correctamente en su PC.</p>
				<p class="text-red helpDiv"><u>Pulse aquí si la descarga no se ha iniciado automáticamente</u></p>
				<input class="btn btn-lg btn-bit4ID refreshBtn" type="button" value="Recargar" />
			</div>
		</div>
	</div>
	
	       
<div class="footer" class="col-xs-12">
    <div class="col-xs-8 col-xs-offset-2 separationTop">
        <div class="col-lg-2 col-sm-6 col-xs-6 footerGroup">
            <span class="titleFooter">Links de interés</span>
            <ul>
                <!-- <li><a href="http://www.d-dna.com/">Digital DNA</a></li> -->
                <li><a href="http://www.tokenme.in/">TokenME</a></li>
                <li><a href="http://www.bit4id.com/">Bit4ID</a></li>
                <li><a href="http://signing.today/">Signing Today</a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-sm-6 col-xs-6 footerGroup">
            <span class="titleFooter">Siguenos en:</span>
            <div>
                <a href="https://www.linkedin.com/company/928239"><img src="img/rrss/f_rss1.png" alt="Imagen del link a la red social LinkedIn del footer"/></a>
                <a href="https://twitter.com/bit4id"><img src="img/rrss/f_rss2.png" alt="Imagen del link a la red social Twitter del footer"/></a>
                <a href="https://www.youtube.com/user/Bit4idChannel"><img src="img/rrss/f_rss3.png" alt="Imagen del link a la red social Youtube del footer"/></a>
            </div>
            <br>
            <span class="titleFooter">Contactenos:</span>
            <div>
                <span>
                    <a href="mailto:4identity@bit4id.com">
                        <img src="img/rrss/f_email.png" class="imgButtonFooter" alt="Imagen del boton para enviar un email"/>
                        4identity@bit4id.com                    </a>
                </span>
                <br>
                <span>
                    <img src="img/rrss/f_phone.png" class="imgButtonFooter" alt="Imagen para indicar numero de telefono"/>
                    +34 935 353 518                </span>
                <br>
                <span>
                    <img src="img/rrss/f_phone.png" class="imgButtonFooter" alt="Imagen para indicar numero de telefono"/>
                    +39 081 762 5600                </span>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 footerGroup">
            <p class="titleFooter">API de Motor de firma / autenticación fuerte web.</p>
            <p>Es sencillo de integrar, es compatible con cualquier navegador y permite su uso bajo los sistemas operativos mas usados.</p>
            <p>4identity, solución desarrollada por Bit4id es un producto revolucionario para facilitar la integración de procesos de firma y autenticación en aplicaciones web. 4identity <u>NO USA</u> Applets o cualquier otro elemento que altere el navegador.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 footerGroup footerRight">
            <p class="titleFooter">Bit4id soluciones sin integración.</p>
            <p>Bit4id tiene un extenso conocimiento y experiencia en software y herramientas para la gestión de la seguridad y sistemas de identificación digital basados en Infraestructuras de Clave Pública (PKI).</p>
            <p>Con sistemas que gestionan más de diez millones de identidades digitales, Bit4id es una de las compañías líderes en el mundo en el sector de PKI e Identidad Digital.</p>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr class="footerHR" />
    <div class="col-sm-8 col-sm-offset-2">
        <div class="copyrightFooter"><span>&copy; 2019 Bit4id, Reservados todos los derechos.</span></div>
        <img class="logoFooter" src="img/logob4id.png" alt="Imagen del logo de bit4id del footer"/>
    </div>
    <div class="clearfix"></div>
</div>

	<div id="arrow"><img src="img/flecha.png" alt="Imagen que indica donde hay que seguir el proceso, fuera del navegador"/></div>
	<div id="arrowUp"><img src="img/flechaUp.png" alt="Imagen que indica donde hay que seguir el proceso, fuera del navegador"/></div>
	<div class="alertNoInputMessage" style="display:none">Por favor, seleccione el archivo que desee firmar desde su PC o introduzca la URL del archivo en los campos del punto 2.</div>
	<div class="alertNoOSVersion" style="display:none">La versión del cliente de 4identity no está disponible para su sistema operativo</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://as-demo.bit4id.org/smartengine/bit4id-sign.js"></script>
		
	</body>
</html>