<?php
namespace Auto\formatos;

use Auto\interfaces\ExtratoFormato;
use Auto\Veiculo;

class ExtratoXML implements ExtratoFormato
{
    public function formato(Veiculo $extrato, $indice)
    {
        $arr = $extrato->imprime($indice);

        $output = '';
        foreach ($arr as $chave => $valor) {
            if ($chave === "multas") {
            // }
            //     foreach ($valor as $key => $value) {
            //         // var_dump($valor);
            //         // $output .= "<{$value[$key]}>{$value}</{$value[$key]}>";
            //     }
            //     $output .= "</{$chave}>";
            } else {
                // $output .= "debug";
                // var_dump($chave);
                $output .= "<" . $chave . ">" . $valor . "</" . $chave . ">";
            }
        }
        return $output;
    }
}


// [
//                 'veiculo' => $this->listaVeiculos[$index]['nome'],
//                 'passageiros' => $this->listaVeiculos[$index]['p'],
//                 'rodas' => $this->listaVeiculos[$index]['r'],
//                 'velocidade' => $this->listaVeiculos[$index]['v'],
//                 'multas' => $multas
//                 ];
