<?php 

    class login_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        public function get_user($data)
        {
            return "success";
        }

        public function get_student_list($id = 0)
        {

            if ( $id == 0 ) {
                $result = $this->db->get('tbl_student');
            }
            else {
                $result = $this->db->get_where('tbl_student', array('id' => $id));
            }
            
            return $result->result();
        }

        public function get_update_list($data, $id)
        {

            $this->db->where('id', $id);
            $this->db->update('tbl_student', $data);
            $result = $this->db->get('tbl_student');
            
            return $result->result();
        }

        public function delete_student_list($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_student');
            $result = $this->db->get('tbl_student');
            
            return $result->result();
        }

        public function create_student_data($data)
        {

            // var_dump($data);

            $this->db->insert('tbl_student', $data);
            $result = $this->db->get('tbl_student');
            
            return $result->result();
        }

    }
    

?>