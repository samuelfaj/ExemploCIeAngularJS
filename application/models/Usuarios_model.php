<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {
    const TABELA = 'usuario';

    public function buscarTodos() {
        $this->db->select('*');
        $this->db->from(self::TABELA);
        return $this->db->get()->result();
    }

    public function buscar($id) {
        $this->db->select('*');
        return $this->db->get_where(self::TABELA, array('idusuario' => $id))->row();
    }

    public function excluir($id) {
        $this->db->delete(self::TABELA, array('idusuario' => $id));
        return $this->db->affected_rows();
    }

    public function criar($itens){
        $res = $this->db->insert(self::TABELA, $itens);

        if($res){
            return $this->buscar($this->db->insert_id());
        }else{
            return FALSE;
        }

    }

}