<?php 

    class Kelas extends CI_Model{

        public function get()
        {
            return $this->db->get('kelas')->result();
        }

        public function get_where($id)
        {
            return $this->db->get_where('kelas', array('id_kelas' => $id))->result();
        }

        public function insert($nama, $kompetensi)
        {
            return $this->db->insert('kelas', array('nama_kelas' => $nama, 'kompetensi_keahlian' => $kompetensi));
        }

        public function update($id, $nama, $kompetensi)
        {
            $this->db->where('id_kelas', $id);
            return $this->db->update('kelas', array('nama_kelas' => $nama, 'kompetensi_keahlian' => $kompetensi));
        }

        public function delete($id)
        {
            return $this->db->delete('kelas', array('id_kelas' => $id));
        }
    }

?>