<?php

class User_model extends CI_Model{
    
    // --------------------------------------------------------------------------------
    /**
     * @usage
     * Single: $this->user_model->get(2);
     * All:    $this->user_model->get()
     * @param type $user_id
     */
    public function get($user_id = null) {

        if($user_id === null){
            $q = $this->db->get('user');
        }elseif (is_array($user_id)) {
            $q = $this->db->get_where('user', $user_id);
        }else{
            $q = $this->db->get_where('user', ['user_id' => $user_id]);
        }
        return $q->result_array();
    }
    
    // --------------------------------------------------------------------------------
    
    /**
     * @param array $data
     * @usage $result = $this->user_model->insert(['login' => 'hey3']);
     */
    public function insert($data) {

        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    
    // --------------------------------------------------------------------------------
    
    /**
     * @usage $result = $this->user_model->update(['login' => 'Peggy'], 7);
     * @param type $data
     * @param type $user_id
     * @return type
     */
    public function update($data, $user_id) {

        $this->db->where(['user_id' => $user_id]);
        $this->db->update('user', $data);
        return $this->db->affected_rows();
    }
    
    // --------------------------------------------------------------------------------
    
    /**
     * @usage $result = $this->user_model->delete(6);
     * @param type $user_id
     * @return type
     */
    public function delete($user_id) {

        $this->db->delete('user', ['user_id' => $user_id]);
        return $this->db->affected_rows();
    }

}
