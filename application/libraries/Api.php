<?php

Class Api
{
    public function __construct()
    {
        $this->resposta =  array(
            'sucesso' => true,
            'msg' => '',
            'data' => array()
        );
    }

    public function sucesso($data = array()){
        $this->resposta['data'] = $data;

        echo json_encode($this->resposta);
    }

    public function erro($mensagem){
        $this->resposta['sucesso'] = false;
        $this->resposta['msg'] = $mensagem;

        echo json_encode($this->resposta);
    }
}