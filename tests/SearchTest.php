<?php


declare(strict_types=1);

use vinicius\cep\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase{


    /**
     *@dataProvider dadosTeste
     */
    
    public function testGetAdress(string $input, array $esperado){
        $resultado  =  new Search();
        $resultado = $resultado->getAdress($input);

      $this->assertEquals($esperado, $resultado);
    }


    public function dadosTeste(){
        return [
            "guanambi"=>[
                "46430000",
                [
                "cep" => "46430-000",
                "logradouro" => "",
                "complemento" =>"",
                "bairro" =>"",
                "localidade" => "Guanambi",
                "uf" => "BA",
                "unidade" =>"",
                "ibge"=> "2911709",
                "gia" =>""
                ]
                ],
            "Ceraima"=>[
                "46430000",
                [
                "cep" => "46430-000",
                "logradouro" => "",
                "complemento" =>"",
                "bairro" =>"",
                "localidade" => "Guanambi",
                "uf" => "BA",
                "unidade" =>"",
                "ibge"=> "2911709",
                "gia" =>""
                ]
            ]
        ];
    }


}








?>