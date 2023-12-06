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
        return ($this->nota1_1 + $this->nota1_2 + $this->nota1_3) / 3;
    }

    public function getMedia2(): float{
        return ($this->nota2_1 + $this->nota2_2 + $this->nota2_3) / 3;
    }

    public function getMedia3(): float{
        return ($this->nota3_1 + $this->nota3_2 + $this->nota3_3) / 3;
    }

    public function getMediaFinal():float{
        return ($this->getMedia1() + $this->getMedia2() + $this->getMedia3())/3;
    }

    public function getStatus(){
        if($this->getMediaFinal() >= 6){
            $this->status = 1;
        }else{
            $this->status = 0;
        }
    }
}