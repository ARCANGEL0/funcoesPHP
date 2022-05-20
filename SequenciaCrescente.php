<?php 
$array = array();


function Verifica($array) {
    $a = $array;
    $b = $array;
    sort($b);
    if ($a == $b){
        return true;
    } else {
        return false;
    }
}



function SequenciaCrescente($array)
{
for($i=0; $i<count($array); $i++)
{
$b = $array;
array_splice($b,$i,1);

if(Verifica($b)) {
	$resultado = 'true';
	break;
}
else {
	$resultado = 'false';
}
}

echo ' Resultado:' . $resultado . "\r\n";
}
 SequenciaCrescente([1, 3, 2, 1]);
 SequenciaCrescente([1, 3, 2]);
 SequenciaCrescente([1, 2, 1, 2] );
 SequenciaCrescente([3, 6, 5, 8, 10, 20, 15] );
 SequenciaCrescente([1, 1, 2, 3, 4, 4]);
 SequenciaCrescente([1, 4, 10, 4, 2]);
 SequenciaCrescente([10, 1, 2, 3, 4, 5]);
 SequenciaCrescente([1, 1, 1, 2, 3] );
 SequenciaCrescente([0, -2, 5, 6]);
 SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
 SequenciaCrescente([40, 50, 60, 10, 20, 30]);
 SequenciaCrescente([1, 1]);
 SequenciaCrescente([1, 2, 5, 3, 5]);
 SequenciaCrescente([1, 2, 5, 5, 5] );
 SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1] );
 SequenciaCrescente([1, 2, 3, 4, 3, 6]);
 SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);
 SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
 SequenciaCrescente([3, 5, 67, 98, 3]);


 ?>