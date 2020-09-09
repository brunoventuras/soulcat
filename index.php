<?php
	
		switch ($_GET["hospedagem"]) {
			case 'home':
				header("Location:http://soulcat.com.br/home");
				break;

			case 'hospedagem':
				header("Location:http://soulcat.com.br/hospedagem");
				break;
			
			default:
				header("Location:http://soulcat.com.br/manutencao.php");
				break;
		}
		

    // if (isset($_GET["hospedagem"])) {
    //     header("Location:http://soulcat.com.br/home");
    // } else {
    //     header("Location:http://soulcat.com.br/manutencao.php");
    // }

?>