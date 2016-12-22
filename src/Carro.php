<?php
namespace Auto;

class Carro extends Veiculo implements InfracoesInterface
{
    public function multas($index, $multas)
    {
        $this->listaVeiculos[$index]['multas'][] = $multas;
    }
}
