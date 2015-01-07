<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
            //$this->load->view('welcome_message');
            echo "hi internet";
            $this->hello();
            $this->addStuff();
            $this->home();
	}

        public function hello() {
            echo ' something else';
        }

        public function addStuff() {
            $this->load->model('math');
            echo $this->math->add(2, 2);
        }

        public function home() {
            $data['title'] = "Home";
            $data['val1'] = "2";
            $data['val2'] = "2";

            $this->load->model('math');

            $data['addTotal'] = $this->math->add($data['val1'], $data['val2']);
            $data['subTotal'] = $this->math->sub($data['val1'], $data['val2']);
            $this->load->view("view_home", $data);
        }

        public function about() {
            $data['title'] = "About";
            $this->load->view('view_about', $data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/site.php */