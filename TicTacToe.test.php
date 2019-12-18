<?php
require_once("./vendor/autoload.php");
require_once("TicTacToe.php");

use PHPUnit\Framework\TestCase; #namespace

final class TicTacToeTest extends TestCase{

    function testJugar(){
        $game = new TicTacToe();
        $game->jugar(2,2);
        $this->assertTrue(true);
    }

    function testMostrarTablero() {
        $game = new TicTacToe();
        $tab = $game->mostrarTablero();
        $this->assertIsArray($tab);
        $this->assertNotEmpty($tab);
    }

    function testCalcularGanador(){
        $game = new TicTacToe();
        $ganador = $game->calcularGanador();
        $this->assertIsInt($ganador);
        $this->assertContains($ganador,[-1,0,1,2]);
    }

}
?>