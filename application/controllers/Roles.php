<?php
class Roles extends CI_Controller {

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
            $this->load->view('templates/header');
            $this->load->view('roles/role_list', $data);
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


        public function view($role_id)
        {
            $data['role'] = $this->Role_model->view_role($role_id);

    
        // Capitalize the first letter
            $data['title'] = $data['role'];
    
            $this->load->view('templates/header');
            $this->load->view('roles/update_role', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');         
        }


        public function create(){
            $data['title'] = 'Add User';

            $this->load->model('user_model');
            $data['roles'] = $this->user_model->view_roles();

            $this->form_validation->set_rules('role_name', 'Role Name', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('roles/create_role', $data);
                $this->load->view('templates/footer');
                $this->load->helper('url');
            } else {
                $this->Role_model->add_role();
                redirect('roles');
            }
         
        }

        public function update(){
            $this->Role_model->update_role();
            redirect('roles');

		}
        public function delete($id){
            $this->Role_model->delete_role($id);
            redirect('roles');
        }

}?>