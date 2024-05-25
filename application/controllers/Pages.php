<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
        // Capitalize the first letter
            $this->load->model('user_model');            
            $data['users'] = $this->user_model->view_users();

            $this->load->model('article_model');
            $data['articles'] = $this->article_model->view_articles();

            $this->load->model('volume_model');
            $data['volumes'] = $this->volume_model->view_volumes();

            $this->load->model('author_model');
            $data['authors'] = $this->author_model->view_authors();
    
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');

            
            $this->load->helper('url');         
        }

        
        
}?>