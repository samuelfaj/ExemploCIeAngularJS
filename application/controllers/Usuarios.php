<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        
        $this->data = json_decode($this->input->raw_input_stream, true);

        $this->load->model("usuarios_model");
        $this->load->library("api");
    }

    public function buscar() {
        $res = $this->usuarios_model->buscar($this->input->post('id'));

        $this->api->sucesso($res);
    }

    public function buscarTodos() {
        $res = $this->usuarios_model->buscarTodos();

        $this->api->sucesso($res);
    }

    public function excluir() {
        $res = $this->usuarios_model->excluir($this->data['id']);

        if($res) return $this->api->sucesso($res);

        return $this->api->erro("O usuário não pode ser deletado");
    }

    public function criar() {
        foreach (array('nome', 'senha', 'login') as $campo){
            if(empty($this->data[$campo])){
                return $this->api->erro("O campo ${campo} deve ser preenchido corretamente");
            }
        }

        if (!filter_var($this->data['login'], FILTER_VALIDATE_EMAIL)) {
            return $this->api->erro("O campo login deve ser um e-mail válido");
        }

        $res = $this->usuarios_model->criar(array(
            'nome'  => $this->data['nome'],
            'senha' => $this->data['senha'],
            'login' => $this->data['login']
        ));

        if($res === false) return $this->api->erro('Erro ao criar usuário');

        $this->api->sucesso($res);
    }

}