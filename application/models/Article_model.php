<?php
	class Article_model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_articles($article_id = NULL){


            if($article_id !=NULL){
                $this->db->order_by("title", "asc");
                $query = $this->db->get_where('articles', array('article_id' => $article_id));
                return $query->row_array();
            } else {
                $this->db->order_by("title", "asc");
                $query = $this->db->get('articles');
                return $query->result_array();
            }
            // $query = $this->db->get_where('articles', array('article_id' => $id));
            // return $query->row_array();
		}

        public function filtered_articles(){
            if($this->input->post('volume') == 'default'){
                $this->db->order_by("title", "asc");
                $query = $this->db->get('articles'); 
                return $query->result_array();
            } else {
                $this->db->order_by("title", "asc");
                $query = $this->db->get_where('articles', array('volume_id' => $this->input->post('volume')));
                return $query->result_array();
            }
            
        }


        public function add_article(){

            if ( ! $this->upload->do_upload('article_pdf'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    echo $error['error'];
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
            }
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];

            $publish = 0;
            if($this->input->post('publish') == true){$publish = 1;}else{$publish = 0;};
 
            
            $data = array(
                'abstract' => $this->input->post('abstract'),
                'volume_id' => $this->input->post('volume'),
                'published' => $publish,
                'file_name' => $filename,
                'title' => $this->input->post('title'),
                'doi' => $this->input->post('doi'),
                'keywords' => $this->input->post('keywords'),
                
            );
            $this->db->insert('articles', $data);
            $article_id = $this->db->insert_id();
            

            foreach ($this->input->post('author') as $author){
                $authordata = array(
                    'article_id' => $article_id,
                    'author_id' => $author,
                );
                $this->db->insert('article_author', $authordata);
            }
		}


        public function update_article(){

            if (!empty($_FILES['article_pdf']['name'])) {
                // A file has been selected, proceed with the upload process
                $config['upload_path'] = 'assets/cmujs_pdf/';
                $config['allowed_types'] = 'pdf';
                $config['max_size']             = 2048;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
    
                $this->upload->initialize($config);
    
                if (!$this->upload->do_upload('article_pdf')) {
                    $error = array('error' => $this->upload->display_errors());
                    echo "File upload failed: " . $error['error'];
                    return;
                }
    
                $upload_data = $this->upload->data();
                $filename = $upload_data['file_name'];
            } else {
                // No file has been selected, fall back to using a default file name
                $filename = $this->input->post("default");
            }
            
            $publish = 0;
            if($this->input->post('publish') == true){$publish = 1;}else{$publish = 0;};
            $data =  array(
                'abstract' => $this->input->post('abstract'),
                'volume_id' => $this->input->post('volume'),
                'file_name' => $filename,
                'published' => $publish,
                'title' => $this->input->post('title'),
                'doi' => $this->input->post('doi'),
                'keywords' => $this->input->post('keywords'),
            );
        
            

            $article_id = $this->input->post('id');
            $this->db->where('article_id', $this->input->post('id'));
            $this->db->update('articles', $data);

            $this->db->where('article_id', $article_id);
            $this->db->delete('article_author');

            foreach ($this->input->post('author') as $author){
                $authordata = array(
                    'article_id' => $article_id,
                    'author_id' => $author,
                );
                $this->db->insert('article_author', $authordata);
            }




		}

        public function delete_article($id){
            $this->db->where('article_id', $id);
            $this->db->delete('articles');
            return true;
        }
    }?>