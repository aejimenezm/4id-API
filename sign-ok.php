<?php
	//$_FILE["attach"]=Información del documento firmado.
	//$_POST["documentID"]=Identificador que hemos marcado en index.php.
	if (!empty($_FILES["attach"])) {
		$myFile = $_FILES["attach"];
		if ($myFile["error"] !== UPLOAD_ERR_OK) {
			echo "<p>Ha ocurrido un error en la subida del fichero.</p>";
			exit;
		}
		$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
		$parts = pathinfo($name);
		$name=$parts["filename"]."-".$_POST["documentID"].".".$parts["extension"];
		/*
		Aquí se puede indicar donde guardar el documento firmado.
		Tal y como está configurado se guardará en la misma carpeta donde estan los PHP.
		*/
		$success = move_uploaded_file($myFile["tmp_name"],$name);
		if (!$success) {
			echo "<p>No puede guardar el archivo.</p>";
		exit;
		}
		header("Location: sign-end-ok.php?file=".$name); /* Redireción del navegador */
		exit();
	} 
	else {
		header("Location: sign-end-error.php"); /* Redireción del navegador */
		exit();
	}
?>