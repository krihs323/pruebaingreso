<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return "ingrese una cadena";

    }

    public function getEjercicio1($cadena)
    {
        $resultado = $this->isValid($cadena);

        return response()->json([
                "respuesta" => $resultado
            ]);


    }


    public function isValid($s,$var=false){
      $arr1 = str_split($s);
    	$flag_frec1 = 0;
    	$pila = array();
    	$i=0;
    	$cantidad_frecuencias=0;
    	$quitar_caracter = false;
    	$rest = '';
    	$valor_retorna = "NO";

    	if($s=="" || $s==null){
    		return "NO";
    	}

    	foreach ($arr1 as $caracter) {

    		$numero_veces = substr_count($s,$caracter);

    		if($i>0){
    			if (in_array($numero_veces, $pila)) {
    				$valor_retorna="YES";
    			}else{
    				if($var==true){
    					$valor_retorna="NO";
    					return "NO";
    					break;
    				}
    				$quitar_caracter = true;
    				$cantidad_frecuencias++;
    				if($cantidad_frecuencias>1){
    					return "NO";
    					break;
    				}
    			}
    		}else{
    			$valor_retorna="YES";
    		}

    		array_push($pila, $numero_veces);

    		$i++;
    	}

    	if($quitar_caracter == true){
    		$size_string = strlen($s);
    		$rest = substr($s, 0, $size_string-1);
    		if($var==false){
    			$valor_retorna = $this->isValid($rest,true);
    		}
    	}

      return $valor_retorna;


    }






}
