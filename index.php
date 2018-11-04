<?php
	
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == "POST"){
		$requestBody = file_get_contents('php://input');
		$json = json_decode($requestBody);

		$text = $json->queryResult->queryText;

		switch ($text) {
			case 'hi':
				# code...
				$speech = "Salut 1";
				break;
			case 'bye'
				$speech = "Au revoir";
				break;
			case 'autres'
				$speech = "Autres";
				break;
			
			default:
				# code...
				$speech = "Désolé pas prise en compte";
				break;
		}

		$reponse = new \stdClass();
		$reponse->speech = "";
		$reponse->displayText = "";
		$reponse->source = "webhook";
		echo json_encode(reponse);

	} else{
		echo 'Method not allowed';
	}

?>
 