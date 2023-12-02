<?php

namespace IeetSite\Core;

class Router{
    protected static $rotas = [];
    public static function add(string $rota, string $controller, string $acao){
        static:: $rotas[$rota] = [$controller, $acao];
    }

    public static function exec(string  $url){
        $url = "/".$url;
        $rotas = static::$rotas;
        if( array_key_exists($url, $rotas)){
            [$controller, $metodo] = $rotas[$url];
            static::carregaController($controller, $metodo);
        }else{
            static::erro(404, 404);
        }
    }
    
    protected static function carregaController($controller, $metodo){
        $controller = NS_CONTROLLER . $controller;
        if(class_exists($controller)){
            $ctr = new $controller();
            if(method_exists($ctr, $metodo)){
                http_response_code(200);
                $ctr->$metodo();
            }else{
                static::erro('metodo', 405);
            }
        }else{
            static::erro('controller', 405);
        }
    }

    protected static function erro(string $tipo, int $protocolo = 400){
        http_response_code($protocolo);
        $controller = NS_CONTROLLER."ErroController";
        $cdr = new $controller();
        $cdr->erro($tipo);
    }
}