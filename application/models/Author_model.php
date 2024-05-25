<?php
	class Author_model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_authors(){
            $this->db->order_by("complete_name", "asc");
			$query = $this->db->get_where('users', array('role' => 2)); 
			return $query->result_array();

            // $this->db->order_by("author_name", "asc");
            // $query = $this->db->get_where('authors', array('author_id' => $id));
            // return $query->row_array();
		}

        public function view_author_articles($id){
            $this->db->select("users.complete_name,users.user_id");
            $this->db->from("article_author");
            $this->db->join('users', 'users.user_id = article_author.author_id', 'inner');
            $this->db->where('article_author.article_id', $id);
            $query = $this->db->get();
            return $query->result_array();
        }

    }?>