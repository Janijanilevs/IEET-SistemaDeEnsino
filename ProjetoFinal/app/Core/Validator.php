<?php

namespace IeetSite\Core;

class Validator{

    protected static bool $houveErro = false;
    protected static array $msg = [];

    public  static function execute(array $regrasValidacao, array $valores){
        foreach($regrasValidacao as $campo => $regras){
            $listaregras  = explode("|", $regras);
            $valor = $valores[$campo] ?? null;
            $parametros = [$valor, $campo];

            foreach($listaregras as $regra){
                if(method_exists(__CLASS__, $regra)){
                    call_user_func_array([__CLASS__, $regra], $parametros);
                }else{
                    
                }
            }
        }
        return static::$houveErro;
    }

    protected static function obrigatorio($valor, $nomecampo){
        $valor = trim($valor);
        if(strlen($valor)== 0){
            static::$houveErro = true;
            static::$msg[$nomecampo] = "O {$nomecampo} é obrigatório e não foi preenchido";
        }
    }

    protected static function email($valor, $nomecampo){
        if(!filter_var($valor, FILTER_VALIDATE_EMAIL )){
            static::$houveErro = true;
            static::$msg[$nomecampo] = "O {$nomecampo} precisa ser um email válido!";
        }
    }
    
}