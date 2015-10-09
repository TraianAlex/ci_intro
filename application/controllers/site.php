<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
        $this->home();
        $this->addStuff();
    }
    //not done
    public function contact(){
        $data['main'] = 'contact';
        $this->load->view("template", $data);
    }

    public function submit(){
        $name = $this->input->post('name');
        if($this->input->post('ajax')){
            echo 'Your email was sent';
        }else{
            $this->session->set_flashdata('message', 'Your email was sent');//echo 'Your email was sent';
            redirect('site/contact');
        }
    }

    public function addStuff() {
        $this->load->model('math');
        echo $this->math->add(2, 2);
    }

    public function home() {

        $data['main'] = 'view_home';
        $data['val1'] = "2";
        $data['val2'] = "2";
        $this->load->model('math');

        $data['addTotal'] = $this->math->add($data['val1'], $data['val2']);
        $data['subTotal'] = $this->math->sub($data['val1'], $data['val2']);
        $this->load->view("template", $data);
    }

    public function about() {

        $data['main'] = 'view_about';
        $this->load->view('template', $data);
    }

    public function getValues() {

        $data['main'] = 'view_db';
        $this->load->model('get_db');
        $data['results'] = $this->get_db->getAll();
        
        $this->load->view('template', $data);
    }

    public function insertValues() {

        $this->load->model('get_db');
        $newRow = ["name" => "bob"];
        $this->get_db->insert1($newRow);
        $this->session->set_flashdata('message', 'it has been added');
        redirect('site/getValues');
    }

    public function insertValues2() {

        $this->load->model('get_db');
        $newRow = [["name" => "sue"],
                   ["name" => "dylan"]];
        $this->get_db->insert2($newRow);
        $this->session->set_flashdata('message', 'it has been added2');
        redirect('site/getValues');
    }

    public function updateValues() {

        $this->load->model('get_db');
        $newRow = ["name" => "angie"];
        $this->get_db->update1($newRow);
        $this->session->set_flashdata('message', 'it has been updated');
        redirect('site/getValues');
    }

    public function updateValues2() {

        $this->load->model('get_db');
        $newRow = [["id" => "3", "name" => "marcus"],
                   ["id" => "4", "name" => "bill"]];
        $this->get_db->update2($newRow);
        $this->session->set_flashdata('message', 'it has been updated2');
        redirect('site/getValues');
    }

    public function deleteValues() {

        $this->load->model('get_db');
        $oldRow = ["id" => "1"];
        $this->get_db->delete1($oldRow);
        $this->session->set_flashdata('message', 'Deleted');
        redirect('site/getValues');
    }

    public function emptyTable() {

        $this->load->model('get_db');
        $oldRow = "test";
        $this->get_db->empty1($oldRow);
        $this->session->set_flashdata('message', 'Emptied!');
        redirect('site/getValues');
    }
}