<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('username', 'Username', 
                        'required|min_length[5]|max_length[15]|is_unique[users.username]',
                        array(  
                            'required' => 'You not have provided %s.',
                            'is_unique'=> 'This %s already exists.' 
                        ));
                $this->form_validation->set_rules('email', 'Email', 
                        'required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
                $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]');
                $this->form_validation->set_rules('gender', 'Gender', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'empty');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
                
                $config = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        ),
        array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required'
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
        )
);

$this->form_validation->set_rules($config);
        }
}

 
                
                        
                