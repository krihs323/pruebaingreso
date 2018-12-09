<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ PruebaController;

class EjercicioTest extends TestCase
{

  public function testCadenaVaciaRetornaNo()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("",false);
    //Assert
    $this->assertEquals("NO", $resultado, "Resultado no deseado");
  }

  public function testCadenaConUnCaracterRetornaYes()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("a",false);
    //Assert
    $this->assertEquals("YES", $resultado, "Resultado no deseado");
  }

  public function testCadenaaabbccRetornaYes()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("aabbcc",false);
    //Assert
    $this->assertEquals("YES", $resultado, "Resultado no deseado");
  }

  public function testCadenaabccbaRetornaYes()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("abccba",false);
    //Assert
    $this->assertEquals("YES", $resultado, "Resultado no deseado");
  }

  public function testCadenaaaabbbcccRetornaYes()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("aaabbbccc",false);
    //Assert
    $this->assertEquals("YES", $resultado, "Resultado no deseado");
  }

  public function testCadenaabbcccRetornaNO()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("abbccc",false);
    //Assert
    $this->assertEquals("NO", $resultado, "Resultado no deseado");
  }

  public function testCadenaConUnCaracter()
  {
    //Arrange
    $Prueba = new PruebaController();
    //Act
    $resultado = $Prueba->isValid("a",false);
    //Assert
    $this->assertEquals("YES", $resultado, "Resultado no deseado");
  }


/*
    public function testCadenaYes()
    {
      //Arrange
      $Prueba = new PruebaController();
      //Act
      $resultado = $Prueba->isValid("abc",false);
      //Assert

      $response = $this->json('GET', 'ejercicio1/abc');

      $response
            ->assertStatus(200)
            ->assertExactJson([
                'respuesta' => "YES",
            ]);

    }
*/






}
