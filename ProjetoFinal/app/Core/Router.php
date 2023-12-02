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
        }else{
            [$controller, $metodo] = $rotas["__erro"];
        }
        static::carregaController($controller, $metodo);
    }
    
    protected static function carregaController($controller, $metodo){
        $controller = NS_CONTROLLER . $controller;
        $ctr = new $controller();
        $ctr->$metodo();
    }
}