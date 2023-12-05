<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Notas extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?float $nota1_1;
    protected ?float $nota1_2;
    protected ?float $nota1_3;
    protected ?float $nota2_1;
    protected ?float $nota2_2;
    protected ?float $nota2_3;
    protected ?float $nota3_1;
    protected ?float $nota3_2;
    protected ?float $nota3_3;
    protected ?int $status;
    protected ?int $Disciplinas_idDisciplinas;
    protected ?int $Turma_idTurma;

    public function getMedia1(): float{
        return ($nota1_1 + $nota1_2 + $nota1_3) / 3;
    }

    public function getMedia2(): float{
        return ($nota2_1 + $nota2_2 + $nota2_3) / 3;
    }

    public function getMedia3(): float{
        return ($nota3_1 + $nota3_2 + $nota3_3) / 3;
    }

    public function getMediaFinal():float{
        return (getMedia1() + getMedia2() + getMedia3())/3;
    }

    public function getStatus(){
        if(getMediaFinal() >= 6){
            $this->status = 1;
        }else{
            $this->status = 0;
        }
    }
}