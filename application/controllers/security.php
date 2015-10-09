<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Security extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function allowed_chars($param) {
        echo "You passed me $param.";
    }

    public function encode(){
    	$this->load->library('encrypt');
    	$message = "This is a secret message";
    	echo $e = $this->encrypt->encode($message);
    	echo $this->encrypt->decode($e);
    }

    public function encode_key($key){
    	$this->load->library('encrypt');
    	$message = "This is a secret message";
    	echo $e = $this->encrypt->encode($message, $key);
    	echo $this->encrypt->decode($e, $key);
    }

    public function sql(){
    	$this->load->database();
    	$name = "Traian' OR name = 'Admin";
    	//unsafe
    	$query = "SELECT * FROM users WHERE name = '$name'";
    	//safe
    	$query = "SELECT * FROM users WHERE name = '".mysql_real_escape_string($name)."'";
    	$query = "SELECT * FROM users WHERE name = '".$this->db->escape_str($name)."'";
    	$query = "SELECT * FROM users WHERE name = ".$this->db->escape($name)."";
    	$query = "SELECT * FROM users WHERE name LIKE '%".$this->db->escape_like_str($name)."%'";
    	//no escaping needed
    	$this->db->select('*')->from('users')->where('name', $name);
    }

    public function xss_filter(){
    	//filtered by config $config['global_xss_filtering'] = true;
    	$this->input->post('comment');
    	//xss
    	$this->input->post('comment', true);
    	$clean_string = $this->input->xss_clean($string);
    }

    public function output(){
    	htmlspecialchars($tring);
    	//automatically filtered
    	echo anchor('url', 'linkname', 'attributes');
    	echo form_input('name', set_value('name'));
    }

    public function session(){
    	$this->load->library('session');
    	$this->session->set_userdata('user_id', 2);
    }
    //$config['encryption_key'] = 'alex-3456789'; or $config['sess_use_database']	= TRUE;
    public function read_session(){
    	$this->load->library('session');
    	$user_id = $this->session->userdata('user_id');
    	if($user_id == 1) echo "You have all access";
    	else echo "You have limited access. User id: ".$user_id;
    }

    public function _secret(){
    	echo "You called secret";
    }

    //modify the error reporting from index to 0 in production 
 }
        