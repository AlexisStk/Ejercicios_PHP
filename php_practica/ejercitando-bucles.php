<?php
// Ejercicio 1 | imprime en pantalla numero del 1 al 100

for ($i=1; $i <=100 ; $i++) { 
    echo "$i <br>" ;
}

//Ejercicio 2 | Imprime numero aleatorio entre el 0 al 100

echo "<hr>";

 $random = rand(0,100);

for ($i=0; $i <= $random; $i++) { 
    echo $i . "<br>";
}

echo "<hr>";

//Ejercicio 3 | Imprime numero en forma descendente

$a = 100;
while ($a >= 85) {
     echo $a-- . "<br>";
};

echo "<hr>";
 
//Ejercicio 4 tira un dado, el bucle se detiene cuando sale 5 veces cara

$cara = 0;
$tiros = 0;

while($cara<5){
    $random = rand(0,1);
    $tiros++;
    if($random == 0){
        $cara++;
    }


}

echo "Salio $cara veces cara y se tiro $tiros veces el dado";

echo "<hr>";

// Ejercicio 5 recorre el Array multidimencional y imprime en pantalla sus valores 

$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"]
    ];

    foreach ($ceu as $pais => $provincias) {
        echo "Las ciudades de $pais son:";
        
        foreach ($provincias as $valor) {
            echo "<li>$valor</li>";
        };
    }
 




?>