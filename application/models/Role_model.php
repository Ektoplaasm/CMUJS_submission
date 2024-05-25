<?php
	class Role_model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_roles(){
                $this->db->order_by("role_name", "asc");
                $query = $this->db->get('roles'); 
                return $query->result_array();
		}

        public function view_role($user_id){
                $this->db->order_by("role_name", "asc");
                $query = $this->db->get_where('roles', array('role_id' => $user_id));
                return $query->row_array();
		}



        public function add_role(){
            $data = array(
                'role_name' => $this->input->post('role_name'),
            );
            return $this->db->insert('roles', $data);

		}

        public function update_role(){
            $data = array(
                'role_name' => $this->input->post('role_name'),
            );
            $this->db->where('role_id', $this->input->post('id'));
            return $this->db->update('roles', $data);

		}

        public function delete_role($id){
            $this->db->where('role_id', $id);
            $this->db->delete('roles');
            return true;
        }

    }?>