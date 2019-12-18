<?php
require_once("TicTacToe.php");

function dibujarTablero($tablero){
    foreach($tablero as $i => $iv){
        print(implode(" ", $iv) . "\n");
    }
    print("\n");
}


$game = new TicTacToe();

while($game->calcularGanador() == 0){
    $game->jugar(random_int(0,2),random_int(0,2));
    dibujarTablero($game->mostrarTablero());
}

print_r("\n Ganador Jugador: " . $game->calcularGanador() ."\n");