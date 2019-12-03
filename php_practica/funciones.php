<?php



$numeroMagico = 200;

//si recibo solo dos parametros comparo esos dos parametros con numero magico...

function mayor(int $n1,int $n2 ,int $n3 = null){
    global $numeroMagico;

    if($n3 == null){
       $n3 = $numeroMagico;

    }
    if($n1 > $n2 && $n1 > $n3){
        return $n1;
    }
    elseif($n2 > $n3 && $n2 > $n1){
        return $n2;
    }
    
    else {
        return $n3;
    }
};

// $mayor = mayor(433,722);
// echo $mayor;

 
//Si el numero limite es null,numero magico toma su lugar como numero limite..
function tabla($nBase,$nLimite = null){
    
    global $numeroMagico;
    $array = [];

    if($nLimite == null){
        $nLimite = $numeroMagico;
    };

    for ($nBase; $nBase <= $nLimite ; $nBase++) { 
        $array[] = $nBase;
    }

    return $array;
}
    var_dump($tabla = tabla(10)) ;

    

    

?>