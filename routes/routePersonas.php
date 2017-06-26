<?php  
	
	// session_start();

	require('../clases/Persona.class.php');

	$Persona = new Persona();

	$action = $_POST['action'];
	
	if(isset($_POST['info']))
		$info = $_POST['info'];

	switch ($action) {
		case 'read':
			echo json_encode($Persona->read($info));
			break;
		case 'busqueda':
			echo json_encode($Persona->busqueda($info));
			break;
		
	}
	
?>