<?php
class Register extends CI_Controller {

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
        public function view($page)
        {
            if ( ! file_exists(APPPATH.'views/register/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
        // Capitalize the first letter
    
            $this->load->view('templates/header');
            $this->load->view('register/'.$page);
            $this->load->view('templates/footer');

            $this->load->helper('url');         
        }

}?>