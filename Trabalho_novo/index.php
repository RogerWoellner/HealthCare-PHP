<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <?php
  
	require ("./header.php");
  
  
	if(isset($_GET["p"])){
		$page = $_GET["p"];
	}else{
		$page = "home";
	}


	switch($page){
		case "imc":
			require_once("./imc.php");
		break;
		case "rcq":
			require_once("./rcq.php");
		break;
		case "pace":
			require_once("./pace.php");
		break;
		default:
			require_once("./home.php");
		break;
	}

?>

</html>
