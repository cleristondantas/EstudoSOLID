<?php
namespace Auto;

abstract class Veiculo
{
    public $listaVeiculos = array();

    public function setVeiculo($rodas, $velocidade, $passageiros)
    {
        $this->listaVeiculos[] = array('r' => $rodas,
                                     'v' => $velocidade,
                                     'p' => $passageiros,
                                     'nome' => null,
                                     'multas' => null);

        return count($this->listaVeiculos)-1;
    }

    // public function qtdRodas($index)
    // {
    //     return $this->listaVeiculos[$index]['r'];
    // }

    // public function potencia($index)
    // {
    //     return $this->listaVeiculos[$index]['r'];
    // }

    // public function qtdPassageiros($index)
    // {
    //     return $this->listaVeiculos[$index]['r'];
    // }

    public function imprime($index)
    {
        $multas = [];

        foreach ($this->listaVeiculos[$index]['multas'] as $key => $value) {
            $multas[] = [
                        'tipo' => $value['tipo'],
                        'valor' => $value['valor']
                        ];
        }

        return [
                'veiculo' => $this->listaVeiculos[$index]['nome'],
                'passageiros' => $this->listaVeiculos[$index]['p'],
                'rodas' => $this->listaVeiculos[$index]['r'],
                'velocidade' => $this->listaVeiculos[$index]['v'],
                'multas' => $this->listaVeiculos[$index]['multas']
                ];
    }
}
