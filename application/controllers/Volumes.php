<?php
class Volumes extends CI_Controller {

        public function index()
        {
            $data['volumes'] = $this->Volume_model->view_volumes();
    
            $this->load->view('templates/header');
            $this->load->view('volumes/volumes', $data);
            $this->load->view('templates/footer');
       
            $this->load->helper('url');         
        }

        public function create(){
            $data['title'] = 'Add Volume';

            $this->form_validation->set_rules('volume_name', 'Volume Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');


                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('volumes/create_volume', $data);
                    $this->load->view('templates/footer');
                    $this->load->helper('url');
                } else {
                    $this->Volume_model->add_volumes();
                    redirect('volumes');
                }
         
        }

        public function view($id){
            $data['volume'] = $this->Volume_model->view_volumes($id);

            $this->load->view('templates/header');
            $this->load->view('volumes/update_volume', $data);
            $this->load->view('templates/footer');
            $this->load->helper('url');
        }

        public function update(){
                    $this->Volume_model->update_volumes();
                    redirect('volumes');
         
        }

        
        public function delete($id){
            $this->Volume_model->delete_volume($id);
            redirect('volumes');
        }

        
        
}?>