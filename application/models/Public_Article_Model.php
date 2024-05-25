<?php
	class Public_Article_Model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_publicarticles(){
            $this->db->select('volumes.volumeid, volumes.volume_name,volumes.published, articles.*');
            $this->db->from('volumes');
            $this->db->join('articles', 'volumes.volumeid = articles.volume_id', 'inner');
            $this->db->order_by('volumes.volume_name', 'DESC');
            $this->db->where('volumes.archived', 0);
            $this->db->where('volumes.published', 1);
            $this->db->where('articles.published', 1);
            $query = $this->db->get();
            return $query->result_array();
		}

        public function active_volume(){
            $query = $this->db->get_where('volumes', array('published' => 1, 'archived' => 0));
            return $query->row_array();
        }

        public function view_publicarticles_archive(){
            $this->db->select('volumes.volumeid, volumes.volume_name,volumes.published, volumes.archived , articles.*');
            $this->db->from('volumes');
            $this->db->join('articles', 'volumes.volumeid = articles.volume_id', 'inner');
            $this->db->order_by('volumes.volume_name', 'DESC');
            $this->db->where('volumes.archived', 1);
            $this->db->where('volumes.published', 1);
            $this->db->where('articles.published', 1);      
            $query = $this->db->get();
            return $query->result_array();
		}

        public function single_article($id){
            $this->db->select('volumes.volumeid, volumes.volume_name,volumes.published, volumes.archived , articles.*');
            $this->db->from('volumes');
            $this->db->join('articles', 'volumes.volumeid = articles.volume_id', 'inner');
            $this->db->order_by('volumes.volume_name', 'DESC');
            $this->db->where('articles.article_id', $id);    
            $query = $this->db->get();
            return $query->row_array();
            // $this->db->order_by('article_id', 'ASC');
            // $query = $this->db->get_where('articles', array('article_id' => $id));
            // return $query->row_array();
        }

    }?>