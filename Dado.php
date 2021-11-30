<?php

//Clase creada por Jennifer
class Dado
{
    // Declaracion
    private $minNumDado = 0;
    private $maxNumDado = 12;

    //funcion tirar Dado
    public function tirarDado($minNumDado, $maxNumDado)
    {
        if ($minNumDado < 0) {
            echo "El mínimo es menor que 0 \n";
        } elseif ($maxNumDado > 12) {
            echo "El máximo es mayor que 12";
        } else {
            $rand = rand($minNumDado, $maxNumDado);
            //echo "Resultado: $rand";
            return $rand;
        }
    }

    //Getters
    public function getminNumDado()
    {
        return $this->minNumDado;
    }

    public function getmaxNumDado()
    {
        return $this->maxNumDado;
    }

    
    //Setters
    public function setminNumDado($cambiarminNum)
    {
        $this->minNumDado = $cambiarminNum;
    }

    public function setmaxNumDado($cambiarmaxNum)
    {
        $this->maxNumDado = $cambiarmaxNum;
    }
}
