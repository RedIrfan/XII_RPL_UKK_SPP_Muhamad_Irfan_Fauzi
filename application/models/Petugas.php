<?php 

    class Petugas extends CI_Model{
        
        public function get()
        {
            return $this->db->get('petugas')->result();
        }

        public function get_where($username, $password)
        {
            return $this->db->get_where('petugas', array('username' => $username, 'password' => $password))->result();
        }

        public function get_where_with_id($id)
        {
            return $this->db->get_where('petugas', array('id_petugas' => $id))->result();
        }

        public function insert($username, $password, $nama_petugas, $level='petugas')
        {
            return $this->db->insert('petugas', array('username' => $username, 'password' => $password, 'nama_petugas' => $nama_petugas, 'level' => $level));
        }

        public function update($id, $username, $password, $nama_petugas, $level="petugas")
        {
            $this->db->where('id_petugas', $id);
            return $this->db->update('petugas', array('username' => $username, 'password' => $password, 'nama_petugas' => $nama_petugas, 'level' => $level));
        }

        public function delete($id)
        {
            return $this->db->delete('petugas', array('id_petugas' => $id));
        }
    }

?>