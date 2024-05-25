<?php
	class User_model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_users(){
                $this->db->order_by("complete_name", "asc");
                $query = $this->db->get('users'); 
                return $query->result_array();
		}

        public function filtered_users(){
            if($this->input->post('role') == 'default'){
                $this->db->order_by("complete_name", "asc");
                $query = $this->db->get('users'); 
                return $query->result_array();
            } else {
                $this->db->order_by("complete_name", "asc");
                $query = $this->db->get_where('users', array('role' => $this->input->post('role')));
                return $query->result_array();
            }
            
        }

        public function view_user($user_id){
                $this->db->order_by("complete_name", "asc");
                $query = $this->db->get_where('users', array('user_id' => $user_id));
                return $query->row_array();
		}

        public function view_roles(){
            $this->db->order_by("role_id", "asc");
            $query = $this->db->get('roles');
            return $query->result_array();
        }



        public function add_user(){
            $status = 0;
            if($this->input->post('user_status') == true){$status = 1;}else{$status = 0;};
			$user_id = url_title($this->input->post('complete_name'));
            $data = array(
                'role' => $this->input->post('user_role'),
                'status' => $status,
                'complete_name' => $this->input->post('complete_name'),
                'user_id' => $user_id,
                'email' => $this->input->post('email_address'),
                'pword' => $this->input->post('pword'),
            );
            return $this->db->insert('users', $data);

		}

        public function update_user(){
            $status = 0;
            if($this->input->post('user_status') == true){$status = 1;}else{$status = 0;};
			$user_id = url_title($this->input->post('id'));
            $data = array(
                'status' => $status,
                'complete_name' => $this->input->post('complete_name'),
                'user_id' => $user_id,
                'email' => $this->input->post('email_address'),
                'pword' => $this->input->post('pword'),
            );
            $this->db->where('user_id', $this->input->post('id'));
            return $this->db->update('users', $data);

		}

        public function delete_user($id){
            $this->db->where('user_id', $id);
            $this->db->delete('users');
            return true;
        }

    }?>