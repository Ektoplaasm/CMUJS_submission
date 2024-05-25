<?php
	class Volume_model extends CI_Model{

        public function __contstruct(){
            $this->load->database();
        }

        public function view_volumes($id = null){
            if ($id == null) {
                $this->db->order_by('volumeid', 'ASC');
                $query = $this->db->get('volumes');
                return $query->result_array();
            } else {
                $this->db->order_by('volumeid', 'ASC');
                $query = $this->db->get_where('volumes', array('volumeid' => $id));
                return $query->row_array();
            }


            // $this->db->order_by('volumeid', 'DESC');
            // $query = $this->db->get_where('volumes', array('volumeid' => $id));
            // return $query->row_array();
		}

        public function add_volumes(){
            $publish = 0;
            $archive = 0;
            if($this->input->post('publish') == true){$publish = 1;}else{$publish = 0;};
            if($this->input->post('archive') == true){$archive = 1;}else{$archive = 0;};
			$user_id = url_title($this->input->post('complete_name'));
            $data = array(
                'volume_name' => $this->input->post('volume_name'),
                'published' => $publish,
                'archived' => $archive,
                'description' => $this->input->post('description'),
            );
            return $this->db->insert('volumes', $data);

		}

        public function update_volumes(){
            $publish = 0;
            $archive = 0;
            if($this->input->post('publish') == true){$publish = 1;}else{$publish = 0;};
            if($this->input->post('archive') == true){$archive = 1;}else{$archive = 0;};
			$user_id = url_title($this->input->post('complete_name'));
            $data = array(
                'volume_name' => $this->input->post('volume_name'),
                'published' => $publish,
                'archived' => $archive,
                'description' => $this->input->post('description'),
            );
            $this->db->where('volumeid', $this->input->post('id'));
            return $this->db->update('volumes', $data);

		}

        public function delete_volume($id){
            $this->db->where('volumeid', $id);
            $this->db->delete('volumes');
            return true;
        }

    }?>