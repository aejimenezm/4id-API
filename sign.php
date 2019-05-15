<!DOCTYPE html>
<html>
	<script>
		function setCookie(c_name,value,exdays)
		{
		var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;
		}
		setCookie('bit4id-sign','sign',1)
	</script>
	<head>
		<meta charset="utf-8" />
		<title>Firma Digital de un Documento en una URL</title>
	</head>
	<body>
		<?php
			$folders="C:/xampp/htdocs/demos_4identity/firmar_mult_docs_local";
			//$url="http://www.bit4id.com/es/pruebas/demo.pdf";
			$documentName="PDF_Prueba.pdf";
			$documentID="_01_online";
			$tipo="PAdES";
			$url_4identity_server_sign="http://as-demo.bit4id.org/smartengine/bit4id-sign.min.js";
		?>
		<form class="bit4id-sign" method="post" action="C:/xampp/htdocs/sign-ok.php">
			<div class="bit4id-signReq" >
				<div class="bit4id-document">C:/xampp/htdocs/PDF_Prueba.pdf</div>
				<div class="bit4id-documentName">documento_online </div>
				<div class="bit4id-documentID">_01_online</div>
				<div class="bit4id-signatureType">PAdES</div>
			</div>
			<div id="bit4id-status">loading</div>
			<input type="submit" disabled="disabled" value="Firmar" />
		</form>
		<script src="https://www.4identity.eu/smartengine/bit4id-sign.min.js"></script>
	</body>
</html>