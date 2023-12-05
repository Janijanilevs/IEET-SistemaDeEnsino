<?php

namespace IeetSite\Core;

class Router{
    protected static $rotas = [];

    public static function get(string $rota, string $controller, string $acao){
        static::add($rota, $controller, $acao, 'GET');
    }

    public static function post(string $rota, string $controller, string $acao){
        static::add($rota, $controller, $acao, 'POST');
    }

    protected static function add(string $rota, string $controller, string $acao,string $metodo){
        static:: $rotas[$rota] = [$controller, $acao, $metodo];
    }

    public static function exec(string  $url, string $metodoHTTP){
        $url = "/".$url;
        $rotas = static::$rotas;
        if( array_key_exists($url, $rotas)){
            [$controller, $acao, $metodo] = $rotas[$url];
            if($metodo == $metodoHTTP){
                static::carregaController($controller, $acao);
            }else{
                static::erro("Metodo",405);
            }
            
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