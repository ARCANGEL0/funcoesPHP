<?php

///// Funções para pegar o primo inferior mais próximo a determinado número N

function verificaPrimo($verifPrimo) // <-------- essa função verifica se determinado parametro é primo
{
  
    if ($verifPrimo <= 1) return false;
    if ($verifPrimo <= 3) return true;
     
    
    if ($verifPrimo%2 == 0 || $verifPrimo%3 == 0) return false;
     
    for ($i= 5;$i * $i <= $verifPrimo; $i= $i+6)
        if ($verifPrimo%$i == 0 || $verifPrimo%($i+2) == 0)
        return false;
     
    return true;
}
 

function primoAnterior($numero) // <----- essa função busca os numeros anteriores à um parametro em um loop, e dentro do loop, faz a verificação se é primo ou não, até encontrar o número mais próximo e retornar o mesmo
{
 
    if ($numero <= 0)
        return 0;
    else if ($numero == 1)
    	return 1;
 
     $primo = $numero;
     $primoEncontrado = false;

    while (!$primoEncontrado) {
        $primo--;
 
        if (verificaPrimo($primo))
            $primoEncontrado = true;
    }
 
    return "Número " . $numero . " =   " . $primo;
}
 

    
   echo primoAnterior(30); // <--- chama a função
 

?>