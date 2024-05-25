<?php
class Users extends CI_Controller {

//     public function logins(){
//         $this->load->view('templates/header');
//         $this->load->view('register/login');
//         $this->load->view('templates/footer');

//         $this->load->helper('url'); 
//     }

// public function registers(){
//         $this->load->view('templates/header');
//         $this->load->view('register/registration');
//         $this->load->view('templates/footer');
// }
        // }
        public function index()
        {
            $data['title'] = 'User Details';
            $data['roles'] = $this->User_model->view_roles();
            $data['users'] = $this->User_model->view_users();
            $this->load->view('templates/header');
            $this->load->view('users/users_list', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');  
       
        }

        public function filtered()
        {
            $data['title'] = 'User Details';
            $data['roles'] = $this->User_model->view_roles();
            $data['users'] = $this->User_model->filtered_users();
            $this->load->view('templates/header');
            $this->load->view('users/users_list', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');  
       
        }


        public function view($user_id)
        {
            $data['user'] = $this->User_model->view_user($user_id);

    
        // Capitalize the first letter
            $data['title'] = $data['user'];
    
            $this->load->view('templates/header');
            $this->load->view('users/update', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');         
        }


        public function create(){
            $data['title'] = 'Add User';

            $this->load->model('user_model');
            $data['roles'] = $this->user_model->view_roles();

            $this->form_validation->set_rules('complete_name', 'Complete Name', 'required');
            $this->form_validation->set_rules('email_address', 'Email Address', 'required');
            $this->form_validation->set_rules('pword', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/create', $data);
                $this->load->view('templates/footer');
                $this->load->helper('url');
            } else {
                $this->User_model->add_user();
                redirect('users');
            }
         
        }

        public function update(){
            $this->User_model->update_user();
            redirect('users');

		}
        public function delete($id){
            $this->User_model->delete_user($id);
            redirect('users');
        }

}?>