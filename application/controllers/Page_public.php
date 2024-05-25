<?php
class Page_public extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Public_Article_Model');
        }


        public function index(){
            $data['volume'] = $this->Public_Article_Model->active_volume();
            $data['pub_articles'] = $this->Public_Article_Model->view_publicarticles();
            $this->load->view('templates/public_header');
            $this->load->view('pages_public/article_view', $data);
            $this->load->view('templates/public_footer');
            $this->load->helper('url');
        }
        public function view($articleid)
        {
        // Capitalize the first letter
            $data['volume'] = $this->Public_Article_Model->active_volume();
            $data['pub_article'] = $this->Public_Article_Model->single_article($articleid);
            $this->load->view('templates/public_header');
            $this->load->view('pages_public/article_details', $data);
            $this->load->view('templates/public_footer');
            $this->load->helper('url'); 
               
        }
        
        public function archived(){
            $data['pub_articles'] = $this->Public_Article_Model->view_publicarticles_archive();
            $this->load->view('templates/public_header');
            $this->load->view('pages_public/archived', $data);
            $this->load->view('templates/public_footer');
            $this->load->helper('url');  
        }

        // public function single_article($articleid){
        //     $data['pub_article'] = $this->Public_Article_Model->single_article($articleid);
        //     $this->load->view('templates/public_header');
        //     $this->load->view('pages_public/article_details', $data);
        //     $this->load->view('templates/public_footer');
        //     $this->load->helper('url');  
        // }

        

        


        
        
}?>