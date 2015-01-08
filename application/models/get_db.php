<?php

class Get_db extends CI_Model{

    public function getAll() {
        $query = $this->db->query('SELECT * FROM test');

        return $query->result();
    }

    public function insert1($data){
        $this->db->insert('test', $data);
    }

    public function insert2($data) {
        $this->db->insert_batch("test", $data);
    }

    public function update1($data) {
        $this->db->update('test', $data, "id = 2");
    }

    public function update2($data) {
        $this->db->update_batch('test', $data, "id");
    }

    public function delete1($data) {
        $this->db->delete("test", $data);
    }

    public function empty1($table) {
        $this->db->empty_table($table);
    }
}

