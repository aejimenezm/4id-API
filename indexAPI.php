<html> 
	<head> 
		<meta charset="utf-8" /> 
		<title>Firma Digital de M&uacute;ltiples documentos en local</title> 
	</head> 
	<body> 
		<?php 
			//$folders=Lista de carpetas necesarias para llegar al fichero sign-ok.php. Tiene que ser el path absoluto de la url. //$documentName=Nombre del documento a firmar. //$documentID=Identificador del documento. Sirve para relacionar el proceso dado que se envía por método POST al destino. //$tipo=Tipo de firma a realizar. Puede ser PAdES, XAdES y CAdES. //$url_4identity_server_sign=Url del script con las funciones del 4identity Server. 
			$folders="C:/xampp/htdocs/laravel-master/laravel-master/public/sign-ok.php"; 
			$documentName="PDF_Prueba.pdf"; 
			$documentID="_mults_local"; 
			$tipo="PAdES"; 
			$url_4identity_server_sign="http://connectordemo.services.bit4id.org/bit4id-sign.min.js"; 
		?>
		<form class="bit4id-sign" method="post" action="<?php echo $folders; ?>sign-ok.php">
			<div class="bit4id-signReq" > 
				<div style="visibility: visible" class="bit4id-documentName"><?php echo $documentName; ?></div> 
				<div style="visibility: visible" class="bit4id-documentID"><?php echo $documentID; ?></div> 
				<div class="bit4id-localFile">YES</div> 
				<div style="visibility: visible" class="bit4id-message">Seleccionar los ficheros a firmar</div> 
				<div style="visibility: visible;" class="bit4id-caption">Seleccione los ficheros a firmar</div> 
				<div class="bit4id-signatureType"><?php echo $tipo; ?></div> 
			</div>
			<div id="bit4id-status">loading</div> 
			<input type="submit" value="Firmar" /> 
		</form> 
		<script src="<?php echo $url_4identity_server_sign; ?>"></script> 
	</body> 
</html>