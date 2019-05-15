<html>
	<head> 
		<meta charset="utf-8" /> 
		<title>Firma Digital de M&uacute;ltiples documentos en local</title> 
	</head> 
	<body> 
		<?php 
			// $folders=Lista de carpetas necesarias para llegar al fichero sign-ok.php. Tiene que ser el path absoluto de la url. //$documentName=Nombre del documento a firmar. //$documentID=Identificador del documento. Sirve para relacionar el proceso dado que se envía por método POST al destino. //$tipo=Tipo de firma a realizar. Puede ser PAdES, XAdES y CAdES. //$url_4identity_server_sign=Url del script con las funciones del 4identity Server. 
			$folders="C:/xampp/htdocs"; 
			$documentName="PDF_Prueba.pdf"; 
			$documentID="_firmado"; 
			$tipo="PAdES"; 
			$url_4identity_server_sign="https://www.4identity.eu/smartengine/bit4id-sign.min.js"; 
		?>
		<form class="bit4id-sign" method="post" action="C://xampp/htdocs/sign-ok.php"> 
			<div class="bit4id-signReq">
				<div style="visibility: visible" class="bit4id-document">C://xampp/htdocs/demos_4identity/firmar_mult_docs_local/PDF_Prueba.pdf</div> 
				<!-- <div style="visibility: visible" class="bit4id-document">file:///C:/xampp/htdocs/demos_4identity/firmar_mult_docs_local/PDF_Prueba.pdf</div> -->
				<div style="visibility: visible" class="bit4id-documentName"><?php echo $documentName; ?></div> 
				<div style="visibility: visible" class="bit4id-documentID"><?php echo $documentID; ?></div> 
				<div class="bit4id-localFile">NO</div> 
				<div class="bit4id-message">Seleccionar los ficheros a firmar</div> 
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-bit4ID btn-file">
							Seleccionar&hellip; <input id="fileselectInputLocal" type="file" />
						</span>
					</span>
					<input type="text" class="form-control" id="localInputText" readonly>
				</div>

				<div class="bit4id-caption">Seleccione los ficheros a firmar</div> 
				<div class="bit4id-signatureType"><?php echo $tipo; ?></div> 
			</div>
			<div id="bit4id-status">loading</div> 
			<input type="submit" disabled="disabled" value="Firmar" /> 
		</form> 
		<script src="<?php echo $url_4identity_server_sign; ?>"></script> 
	</body> 
</html>