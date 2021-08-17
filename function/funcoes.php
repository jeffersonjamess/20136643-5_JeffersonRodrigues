<?php
	function retornaRotulo($codigo){
		include "../dados/dados.php";
		$rotulo = "";
		for ($i=0; $i < count($produtos); $i++) { 
			if ($produtos[$i] == $codigo) {
				$rotulo = $produtos[$i+1];
			}
		}
		return $rotulo;
	}

	function retornaDescricao($codigo){
		include "../dados/dados.php";
		$descricao = "";
		for ($i=0; $i < count($produtos); $i++) { 
			if ($produtos[$i] == $codigo) {
				$descricao = $produtos[$i+2];
			}
		}
		return $descricao;
	}

	function retornaPeso($codigo){
		include "../dados/dados.php";
		$peso = "";
		for ($i=0; $i < count($produtos); $i++) { 
			if ($produtos[$i] == $codigo) {
				$peso = $produtos[$i+3];
			}
		}
		return $peso;
	}
	
?>