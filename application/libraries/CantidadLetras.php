<?php

class CantidadLetras {

    function num2letras($num, $fem = false, $dec = true) {
        $matuni[2] = "dos";
        $matuni[3] = "tres";
        $matuni[4] = "cuatro";
        $matuni[5] = "cinco";
        $matuni[6] = "seis";
        $matuni[7] = "siete";
        $matuni[8] = "ocho";
        $matuni[9] = "nueve";
        $matuni[10] = "diez";
        $matuni[11] = "once";
        $matuni[12] = "doce";
        $matuni[13] = "trece";
        $matuni[14] = "catorce";
        $matuni[15] = "quince";
        $matuni[16] = "dieciseis";
        $matuni[17] = "diecisiete";
        $matuni[18] = "dieciocho";
        $matuni[19] = "diecinueve";
        $matuni[20] = "veinte";
        $matunisub[2] = "dos";
        $matunisub[3] = "tres";
        $matunisub[4] = "cuatro";
        $matunisub[5] = "quin";
        $matunisub[6] = "seis";
        $matunisub[7] = "sete";
        $matunisub[8] = "ocho";
        $matunisub[9] = "nove";

        $matdec[2] = "veint";
        $matdec[3] = "treinta";
        $matdec[4] = "cuarenta";
        $matdec[5] = "cincuenta";
        $matdec[6] = "sesenta";
        $matdec[7] = "setenta";
        $matdec[8] = "ochenta";
        $matdec[9] = "noventa";
        $matsub[3] = 'mill';
        $matsub[5] = 'bill';
        $matsub[7] = 'mill';
        $matsub[9] = 'trill';
        $matsub[11] = 'mill';
        $matsub[13] = 'bill';
        $matsub[15] = 'mill';
        $matmil[4] = 'millones';
        $matmil[6] = 'billones';
        $matmil[7] = 'de billones';
        $matmil[8] = 'millones de billones';
        $matmil[10] = 'trillones';
        $matmil[11] = 'de trillones';
        $matmil[12] = 'millones de trillones';
        $matmil[13] = 'de trillones';
        $matmil[14] = 'billones de trillones';
        $matmil[15] = 'de billones de trillones';
        $matmil[16] = 'millones de billones de trillones';

        //Zi hack
        $float = explode('.', $num);
        $num = $float[0];

        $num = trim((string) @$num);
        if ($num[0] == '-') {
            $neg = 'menos ';
            $num = substr($num, 1);
        } else
            $neg = '';
        while ($num[0] == '0')
            $num = substr($num, 1);
        if ($num[0] < '1' or $num[0] > 9)
            $num = '0' . $num;
        $zeros = true;
        $punt = false;
        $ent = '';
        $fra = '';
        for ($c = 0; $c < strlen($num); $c++) {
            $n = $num[$c];
            if (!(strpos(".,'''", $n) === false)) {
                if ($punt)
                    break;
                else {
                    $punt = true;
                    continue;
                }
            } elseif (!(strpos('0123456789', $n) === false)) {
                if ($punt) {
                    if ($n != '0')
                        $zeros = false;
                    $fra .= $n;
                } else
                    $ent .= $n;
            } else
                break;
        }
        $ent = '     ' . $ent;
        if ($dec and $fra and ! $zeros) {
            $fin = ' coma';
            for ($n = 0; $n < strlen($fra); $n++) {
                if (($s = $fra[$n]) == '0')
                    $fin .= ' cero';
                elseif ($s == '1')
                    $fin .= $fem ? ' una' : ' un';
                else
                    $fin .= ' ' . $matuni[$s];
            }
        } else
            $fin = '';
        if ((int) $ent === 0)
            return 'Cero ' . $fin;
        $tex = '';
        $sub = 0;
        $mils = 0;
        $neutro = false;
        while (($num = substr($ent, -3)) != '   ') {
            $ent = substr($ent, 0, -3);
            if (++$sub < 3 and $fem) {
                $matuni[1] = 'una';
                $subcent = 'as';
            } else {
                $matuni[1] = $neutro ? 'un' : 'uno';
                $subcent = 'os';
            }
            $t = '';
            $n2 = substr($num, 1);
            if ($n2 == '00') {
                
            } elseif ($n2 < 21)
                $t = ' ' . $matuni[(int) $n2];
            elseif ($n2 < 30) {
                $n3 = $num[2];
                if ($n3 != 0)
                    $t = 'i' . $matuni[$n3];
                $n2 = $num[1];
                $t = ' ' . $matdec[$n2] . $t;
            }else {
                $n3 = $num[2];
                if ($n3 != 0)
                    $t = ' y ' . $matuni[$n3];
                $n2 = $num[1];
                $t = ' ' . $matdec[$n2] . $t;
            }
            $n = $num[0];
            if ($n == 1) {
                $t = ' ciento' . $t;
            } elseif ($n == 5) {
                $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t;
            } elseif ($n != 0) {
                $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t;
            }
            if ($sub == 1) {
                
            } elseif (!isset($matsub[$sub])) {
                if ($num == 1) {
                    $t = ' mil';
                } elseif ($num > 1) {
                    $t .= ' mil';
                }
            } elseif ($num == 1) {
                $t .= ' ' . $matsub[$sub] . '?n';
            } elseif ($num > 1) {
                $t .= ' ' . $matsub[$sub] . 'ones';
            }
            if ($num == '000')
                $mils ++;
            elseif ($mils != 0) {
                if (isset($matmil[$sub]))
                    $t .= ' ' . $matmil[$sub];
                $mils = 0;
            }
            $neutro = true;
            $tex = $t . $tex;
        }
//        $tex = $neg . substr($tex, 1) . $fin;
//        //Zi hack --> return ucfirst($tex);
//        $end_num = ucfirst($tex) . ' pesos ' . $float[1] . '/100 M.N.';
//        return $end_num;

        if (count($float) > 1) {
            $end_num = ucfirst($tex) . ' dólares  con ' . $float[1] . '/100 ';
        } else {
            $end_num = ucfirst($tex) . ' dólares';
        }
        return $end_num;
    }

    function numerotexto($numero) {
        // Primero tomamos el numero y le quitamos los caracteres especiales y extras 
        // Dejando solamente el punto "." que separa los decimales 
        // Si encuentra mas de un punto, devuelve error. 
        // NOTA: Para los paises en que el punto y la coma se usan de forma 
        // inversa, solo hay que cambiar la coma por punto en el array de "extras" 
        // y el punto por coma en el explode de $partes 

        $extras = array("/[\$]/", "/ /", "/,/", "/-/");
        $limpio = preg_replace($extras, "", $numero);
        $partes = explode(".", $limpio);
        if (count($partes) > 2) {
            return "Error, el n&uacute;mero no es correcto";
            exit();
        }

        // Ahora explotamos la parte del numero en elementos de un array que 
        // llamaremos $digitos, y contamos los grupos de tres digitos 
        // resultantes 

        $digitos_piezas = chunk_split($partes[0], 1, "#");
        $digitos_piezas = substr($digitos_piezas, 0, strlen($digitos_piezas) - 1);
        $digitos = explode("#", $digitos_piezas);
        $todos = count($digitos);
        $grupos = ceil(count($digitos) / 3);

        // comenzamos a dar formato a cada grupo 

        $unidad = array('un', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve');
        $decenas = array('diez', 'once', 'doce', 'trece', 'catorce', 'quince');
        $decena = array('dieci', 'veinti', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa');
        $centena = array('ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos');
        $resto = $todos;

        for ($i = 1; $i <= $grupos; $i++) {

            // Hacemos el grupo 
            if ($resto >= 3) {
                $corte = 3;
            } else {
                $corte = $resto;
            }
            $offset = (($i * 3) - 3) + $corte;
            $offset = $offset * (-1);

            // la siguiente seccion es una adaptacion de la contribucion de cofyman y JavierB 

            $num = implode("", array_slice($digitos, $offset, $corte));
            $resultado[$i] = "";
            $cen = (int) ($num / 100);              //Cifra de las centenas 
            $doble = $num - ($cen * 100);             //Cifras de las decenas y unidades 
            $dec = (int) ($num / 10) - ($cen * 10);    //Cifra de las decenas 
            $uni = $num - ($dec * 10) - ($cen * 100);   //Cifra de las unidades 
            if ($cen > 0) {
                if ($num == 100)
                    $resultado[$i] = "cien";
                else
                    $resultado[$i] = $centena[$cen - 1] . ' ';
            }//end if 
            if ($doble > 0) {
                if ($doble == 20) {
                    $resultado[$i] .= " veinte";
                } elseif (($doble < 16) and ( $doble > 9)) {
                    $resultado[$i] .= $decenas[$doble - 10];
                } else {
                    $resultado[$i] .=' ' . $decena[$dec - 1];
                }//end if 
                if ($dec > 2 and $uni <> 0)
                    $resultado[$i] .=' y ';
                if (($uni > 0) and ( $doble > 15) or ( $dec == 0)) {
                    if ($i == 1 && $uni == 1)
                        $resultado[$i].="uno";
                    elseif ($i == 2 && $num == 1)
                        $resultado[$i].="";
                    else
                        $resultado[$i].=$unidad[$uni - 1];
                }
            }

            // Le agregamos la terminacion del grupo 
            switch ($i) {
                case 2:
                    $resultado[$i].= ($resultado[$i] == "") ? "" : " mil ";
                    break;
                case 3:
                    $resultado[$i].= ($num == 1) ? " mill&oacute;n " : " millones ";
                    break;
            }
            $resto-=$corte;
        }

        // Sacamos el resultado (primero invertimos el array) 
        $resultado_inv = array_reverse($resultado, TRUE);
        $final = "";
        foreach ($resultado_inv as $parte) {
            $final.=$parte;
        }
        return $final;
    }

}
