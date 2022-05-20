<?php 


function SeculoAno($ano)
{
	
	$verificaAno = substr($ano, 2, 2);
	if ($verificaAno == 00) {

		$seculo = substr($ano, 0, 2);
	}
	else { 
    $calculo = ($ano/100)+1;
	$seculo = (int)$calculo;
}



	echo "<div style='width: 20%; background-color: #EFEFEF; '>";
	echo "O ano " . $ano . " pertence ao século " . $seculo ;
	echo "</div>";


}

SeculoAno(1905 ); // <---- aqui vai o parametro do ano
SeculoAno(1700);


 ?>