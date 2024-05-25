<?php
class Articles extends CI_Controller {

        public function index()
        {
        
            $this->load->model('article_model');
            $data['articles'] = $this->article_model->view_articles();
            $data['volumes'] = $this->Volume_model->view_volumes();

            $this->load->view('templates/header');
            $this->load->view('articles/articles_list', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');         
        }

        public function filtered()
        {
            $data['volumes'] = $this->Volume_model->view_volumes();
            $data['articles'] = $this->Article_model->filtered_articles();
            $this->load->view('templates/header');
            $this->load->view('articles/articles_list', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');  
       
        }

        public function view($article_id)
        {
            $data['article'] = $this->Article_model->view_articles($article_id);
            $data['volumes'] = $this->Volume_model->view_volumes();
            $data['authors'] = $this->Author_model->view_authors();
            $data['article_authors'] = $this->Author_model->view_author_articles($article_id);


    
        // Update Article page
            $data['title'] = $data['article'];
    
            $this->load->view('templates/header');
            $this->load->view('articles/update_article', $data);
            $this->load->view('templates/footer');

            $this->load->helper('url');         
        }

        public function create(){
            $this->load->model('Article_model');

            $data['volumes'] = $this->Volume_model->view_volumes();

            $data['authors'] = $this->Author_model->view_authors();
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('doi', 'DOI', 'required');
            $this->form_validation->set_rules('keywords', 'Keywords', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('volume', 'Volume', 'required');
            $this->form_validation->set_rules('author[]', 'Authors', 'required');

            $config['upload_path']          = 'assets/cmujs_pdf/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('articles/create_article', $data);
                $this->load->view('templates/footer');
                $this->load->helper('url');
            } else {
                $this->Article_model->add_article();
                redirect('articles');
            }
        }

        public function update(){
            $this->load->model('Article_model');

            $data['volumes'] = $this->Volume_model->view_volumes();

            $data['authors'] = $this->Author_model->view_authors();
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('doi', 'DOI', 'required');
            $this->form_validation->set_rules('keywords', 'Keywords', 'required');
            $this->form_validation->set_rules('volume', 'Volume', 'required');
            $this->form_validation->set_rules('author[]', 'Authors', 'required');


            // $config['upload_path']          = 'assets/cmujs_pdf/';
            // $config['allowed_types']        = 'pdf';
            // $config['max_size']             = 2048;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            // $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('articles/update_article', $data);
                $this->load->view('templates/footer');
                $this->load->helper('url');
            } else {
                $this->Article_model->update_article();
                redirect('articles');
            }
        }
        public function delete($id){
            $this->Article_model->delete_article($id);
            redirect('articles');
        }

        
        
}?>