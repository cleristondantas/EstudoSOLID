<?php
namespace Auto\formatos;

use Auto\interfaces\ExtratoFormato;
use Auto\Veiculo;

class ExtratoJson implements ExtratoFormato
{
    public function formato(Veiculo $extrato, $indice)
    {
        return json_encode($extrato->imprime($indice));
    }
}
