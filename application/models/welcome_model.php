<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_Model extends CI_Model {

    public function get() {
        $this->db->select('*');
        $this->db->from('cliente');
        return $this->db->get()->result();

    }

    public function post($itens){

        $res = $this->db->insert('items', $itens);

        if($res){

            return $this->get();

        }else{

            return FALSE;

        }

    }

}