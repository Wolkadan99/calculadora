<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Config\Logger;

class HomeController
{

    public static function index()
    {
        require "../src/Views/index.php";
    }

    public static function soma()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da soma: " . ($valor1 + $valor2);
        Logger::logger("Foi realizada a operação de soma!", "info");

    }
    public static function sub()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da subtração: " . ($valor1 - $valor2);
        Logger::logger("Foi realizada a operação de subtração!", "info");
    }

    public static function mult()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da multiplicação: " . ($valor1 * $valor2);
        $ver = $valor1 * $valor2;

        if ($ver == 0) {
            Logger::logger("Foi realizada a operação de multiplicação por zero!", "info");
        } else
            Logger::logger("Foi realizada a operação de multiplicação!", "info");
    }

    public static function divs()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da divisão: " . ($valor1 / $valor2);
        if ($valor2 == 0) {
            Logger::logger("Não é possivel dividir por zero", "error");
        }
        else
            Logger::logger("Foi realizada a operação de divisão!", "info");
    }

}

?>