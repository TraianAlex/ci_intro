<?php

class Home extends CI_Controller{

    // --------------------------------------------------------------------------------
    
    public function index() {

        $this->load->view('home/inc/header_view');
        $this->load->view('home/home_view');
        $this->load->view('home/inc/footer_view');
    }
    
    // --------------------------------------------------------------------------------
    
    public function register() {

        $this->load->view('home/inc/header_view');
        $this->load->view('home/register_view');
        $this->load->view('home/inc/footer_view');
    }
    
    // --------------------------------------------------------------------------------
/*
    public function code() {
        $this->load->library('encrypt');
        echo $this->encrypt->encode('My secret passord');
        echo $this->encrypt->decode('Bz1aQ627Ny4Dysh2QAxhs0bvqKZ45gPlRkmFyCgJRsS5cuoo5NCtUEbJ+7S0t9TVfJkL11K27R0Tc+HQ31QGTQ==');
        echo hash('sha256', 'custom'.SALT);
    }
 */
//    public function test() {
//        $this->db->select('user_id, login')
//                ->from('user')
//                ->order_by('user_id DESC');
        //$q = $this->db->get_where('user', ['user_id' => 1]);
        //$this->db->where(['user_id' => 2]);
        //$q = $this->db->get('user');

//        $q = $this->db->get();
//        print_r($q->result());

        //$this->db->insert('user', ['login' => 'Jenkins']);
        //$this->db->where(['user_id' => 4]);
        //$this->db->update('user', ['login' => 'Sammy']);

        //$this->db->delete('user', ['user_id' => 3]);

//    }
}
