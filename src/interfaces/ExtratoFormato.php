<?php
namespace Auto\interfaces;

use Auto\Veiculo;

interface ExtratoFormato
{
    public function formato(Veiculo $extrato, $indice);
}
