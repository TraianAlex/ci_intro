<?php

class Test extends CI_Controller{

    // --------------------------------------------------------------------------------
    
    public function __construct() {
        parent::__construct();
//        $this->load->model('user_model');
    }

//    public function login() {
//
//        $login = $this->input->post('login');
//        $password = $this->input->post('password');
//
//        $result = $this->user_model->get(['login' => $login,
//                                   'password' => hash('sha256', $password.SALT)
//            ]);
//
//        $this->output->set_content_type('application_json');
//        if($result){
//            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
//            $this->output->set_output(json_encode(['result' => 1]));
//            return false;
//        }
//        $this->output->set_output(json_encode(['result' => 0]));
//
////        print_r($result);
////        die();
////        $this->session->set_userdata(['user_id' => 1]);
////        $session = $this->session->all_userdata();
////        print_r($session);
//        }
//        
//    public function register() {
//
//        $this->output->set_content_type('application_json');
//        $this->form_validation->set_rules('login', 'Login', 'required|min_length[4]|max_length[16]|is_unique[user.login]');
//        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
//        $this->form_validation->set_rules('password', 'Password',
//                                                'required|min_length[4]|max_length[16]|matches[confirm_password]');
//        //$this->form_validation->set_message('required', 'Only a dog knows you need this!');//customesing rules
//        //$this->form_validation->set_message('valid_email', 'Cats don\'t know how to type!');
//        
//        if($this->form_validation->run() == false){
//            //echo validation_errors();//down is an array of errors
//            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
//            return false;
//        }
//       
//        $login = $this->input->post('login');
//        $email = $this->input->post('email');
//        $password = $this->input->post('password');
//        $confirm_password = $this->input->post('confirm_password');
//
//        $user_id = $this->user_model->insert(['login' => $login,
//                                'password' => hash('sha256', $password.SALT),
//                                'email' => $email]);
////        echo $user_id;
////        die('Not yet ready');
//
//        if($user_id){
//            $this->session->set_userdata(['user_id' => $user_id]);
//            $this->output->set_output(json_encode(['result' => 1]));
//            return false;
//        }
//        $this->output->set_output(json_encode(['result' => 0, 'error' => 'User not created.']));
//
//        }

    // --------------------------------------------------------------------------------
    
    public function test_get() {
        $result = $this->user_model->get(2);
        print_r($result);

        $this->output->enable_profiler();
    }

    // --------------------------------------------------------------------------------
    
    public function test_insert() {
        $result = $this->user_model->insert(['login' => 'hey3']);
        print_r($result);
    }

    // --------------------------------------------------------------------------------
    
    public function test_update() {
        $result = $this->user_model->update(['login' => 'Peggy'], 7);
        print_r($result);
    }

    // --------------------------------------------------------------------------------
    
    public function test_delete($user_id) {
        $result = $this->user_model->delete($user_id);
        print_r($result);
    }

}
/*When you register a user it's important to remember we want one unique login per user. Otherwise, if we had two different users with the same login then it would log the user in that was first found in the database with either password.

This is where the form validation will come in handy. We can do a simple lookup to check if it's a unique user registering:

$this->form_validation->set_rules('email', false, 'required|is_unique[user.email]');

The pipe "|" separates different rules to apply to a POST value. When you see is_unique[] the data inside the brackets is the table name and the table row. So this may actually read like: is_unique[table.row].

Remember that it's always important to validate on the server, more important than front-end. There will always be ways around the front-end, such as disabling JavaScript validation, so always keep the server as your first priority.*/