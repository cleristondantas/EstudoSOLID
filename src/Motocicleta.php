<?php
namespace Auto;

class Motocicleta extends Veiculo implements InfracoesInterface
{
    public function multas($index, $multas)
    {
        $this->listaVeiculos[$index]['multas'][] = $multas;
    }
}
