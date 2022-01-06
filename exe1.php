<?php
	
	function calcularSeculo($ano) {
		
		return ceil($ano/100);
	}

	echo 'seculo '.calcularSeculo(1700);
	
?>

