<?php

namespace Aluno\ProjetoPhp\Config;

use Monolog\Handler\StreamHandler;

class Logger
{

    public static function logger($mensagem, $tipo)
    {
        $log = new \Monolog\Logger("projetophp");
        $log->pushHandler(
            new StreamHandler(dirname(__FILE__).'/logs.txt')
        );
        switch($tipo){
            case 'info':
                $log->info($mensagem);
                break;
            case 'notice':
                $log->notice($mensagem);
                break;
            case 'error':
                $log->error($mensagem);
                break;
            default:
                $log-info($mensagem);
                break;
        }
    }


}