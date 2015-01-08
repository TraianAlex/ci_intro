<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
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

        public function getValues() {
            $this->load->model('get_db');

            $data['results'] = $this->get_db->getAll();

            $this->load->view('view_db', $data);
        }

        public function insertValues() {
            $this->load->model('get_db');

            $newRow = array("name" => "bob");
            $this->get_db->insert1($newRow);
            echo "it has been added";
        }

        public function insertValues2() {
            $this->load->model('get_db');

            $newRow = array(array("name" => "sue"),
                          array("name" => "dylan"));
            $this->get_db->insert2($newRow);
            echo "it has been added 2";
        }

        public function updateValues() {
            $this->load->model('get_db');

            $newRow = array("name" => "angie");
            $this->get_db->update1($newRow);
            echo "it has been updated";
        }

        public function updateValues2() {
            $this->load->model('get_db');

            $newRow = array(array("id" => "3",
                              "name" => "marcus"),
                     array("id" => "4",
                         "name" => "bill"));
            $this->get_db->update2($newRow);
            echo "it has been updated 2";
        }

        public function deleteValues() {
            $this->load->model('get_db');

            $oldRow = array("id" => "1");
            $this->get_db->delete1($oldRow);
            echo 'deleted';
        }

        public function emptyTable() {
            $this->load->model('get_db');

            $oldRow = "test";
            $this->get_db->empty1($oldRow);
            echo 'emptied!';
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/site.php */