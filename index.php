<html>
	<head>
		<meta charset="utf-8" /> 
		<title>Firma Digital de M&uacute;ltiples documentos en local</title> 
	</head> 
	<body> 
		<?php 
			/*$folders=Lista de carpetas necesarias para llegar al fichero sign-ok.php. Tiene que ser el path absoluto de la url. 
			//$documentName=Nombre del documento a firmar. 
			//$documentID=Identificador del documento. Sirve para relacionar el proceso dado que se envía por método POST al destino. 
			//$tipo=Tipo de firma a realizar. Puede ser PAdES, XAdES y CAdES. 
			//$url_4identity_server_sign=Url del script con las funciones del 4identity Server. $folders="demos_4identity/firmar_mult_docs_local/"; $documentName="multiples_documentos_local"; $documentID="_mults_local"; $tipo="PAdES"; $url_4identity_server_sign="https://www.4identity.eu/smartengine/bit4id-sign.min.js"; */

			$folders="C:/xampp/htdocs/demos_4identity/firmar_mult_docs_local/"; 
			$documentName="PDF_Prueba.pdf"; 
			$documentID="_mults_local"; 
			$tipo="XAdES";
			$url_4identity_server_sign="https://www.4identity.eu/smartengine/bit4id-sign.js";
			/*action="<?php echo $folders; ?>sign-ok.php"*/

		?>
		<form class="bit4id-sign" method="post" action="<?php echo $folders; ?>" enctype="multipart/form-data">
			<div class="bit4id-signReq" >
				<div style="visibility: visible;" class="bit4id-documentName"><?php echo $documentName; ?></div>
				<div style="visibility: visible" class="bit4id-documentID"><?php echo $documentID; ?></div>
				<div class="bit4id-localFile">YES</div>
				<div class="bit4id-message">Seleccionar los ficheros a firmar</div>
				<!--<input type="file" name="adjunto" accept=".pdf, .doc, .docx, .png" class="bit4id-documentName">-->
				<input type="file" name="adju" accept=".pdf, .doc, .docx, .png" multiple class="bit4id-caption">Seleccione los ficheros a firmar</div>
				<div class="bit4id-signatureType"><?php echo $tipo; ?></div>
			</div>
			<div id="bit4id-status">loading</div>
			<input type="submit" disabled="disabled" value="Firmar" />
		</form>
		<script src="<?php echo $url_4identity_server_sign; ?>"></script>
		
	</body>
</html>