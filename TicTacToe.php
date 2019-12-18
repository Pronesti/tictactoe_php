<?php

class TicTacToe{
    private $tablero = array(array(" "," "," "),array(" "," "," "),array(" "," "," "));
    private $jugador = "X";
    private $ganador = 0;

    function jugar($fila,$columna){
        if($this->tablero[$fila][$columna] == " "){
            $this->tablero[$fila][$columna] = $this->jugador;
            if($this->jugador == "X"){
                $this->jugador = "O";
            }else{
                $this->jugador = "X";
            }
        }
    }

    function mostrarTablero():array {
        return $this->tablero;
    }

    function calcularGanador():int {
        $ganador = "";
        $estaLleno = true;

        for($i=0;$i<3;$i=$i+1){
            if($this->tablero[$i][0] != " " && $this->tablero[$i][0] == $this->tablero[$i][1] && $this->tablero[$i][0] == $this->tablero[$i][2]){
                $ganador = $this->tablero[$i][0];
            }
            if($this->tablero[0][$i] != " " && $this->tablero[0][$i] == $this->tablero[1][$i] && $this->tablero[$i][0] == $this->tablero[2][$i]){
                $ganador = $this->tablero[0][$i];
            }
        }

        foreach($this->tablero as $i => $iv){
            foreach($iv as $j => $jv){
                if($jv == " "){
                    $estaLleno = false;
                }
            }
        }

        if($ganador == ""){
            if($estaLleno == false){
                return 0;
            }else{
                return -1;
            }
        }elseif($ganador == "X"){
            return 1;
        }else{ // ganador O
            return 2;
        }

    }
}

?>