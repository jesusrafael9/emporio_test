<?php
/**
    Programar una funcion que permita resolver el siguiente problema:
    
    Se necesita una funcion para inspeccionar si un fragmento de texto tiene frases entre parentesis que esten correctamente cerrados, Es decir, si un parectesis se abre, luego tambien debe cerrarse. tambien debe asegurarse que los parentesis se abran y cierren de forma correcta (respetando el orden)
*/

function verificarParentesis($cadenaSimbolos){
    $p = new SplStack();
    $balanceados = true;
    $indice = 0;
    $cadenaSimbolos = ereg_replace("[^\(\)]", "", $cadenaSimbolos);
    while ($indice < strlen($cadenaSimbolos) && $balanceados){
        $simbolo = $cadenaSimbolos[$indice];
        if ($simbolo == "("){
            $p->push($simbolo);
            //$p->rewind();
        	//var_dump($p->current());
        }else{
            if($p->isEmpty()){
                $balanceados = false;
            }else{
                $p->pop();
            }
        }
        $indice = $indice + 1;
    }
    if ($balanceados && $p->isEmpty()){
    	echo "CORRECTO";
    }else{
    	echo "INCORRECTO";
    }
}
echo verificarParentesis("texto (de prueba) para probar").' $str = \'texto (de prueba) para probar\'<br>';
echo verificarParentesis("texto (de prueba para probar").' $str = \'texto (de prueba para probar\'<br>';
echo verificarParentesis("Este (texto (de prueba) (sirve) para probar (si)) anda").' $str = \'Este (texto (de prueba) (sirve) para probar (si)) anda\'<br>';
echo verificarParentesis("Este (texto (de prueba (sirve) para probar (si) anda").' $str = \'Este (texto (de prueba) (sirve) para probar (si)) anda\'<br>';