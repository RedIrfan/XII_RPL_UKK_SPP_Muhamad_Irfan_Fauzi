<?php 

    class Spp extends CI_Model{

        public function get()
        {
            return $this->db->get('spp')->result();
        }

        public function get_where($id)
        {
            return $this->db->get_where('spp', array('id_spp' => $id))->result();
        }

        public function insert($bulan, $nominal)
        {
            return $this->db->insert('spp', array('bulan' => $bulan, 'nominal' => $nominal));
        }

        public function update($id, $bulan, $nominal)
        {
            $this->db->where('id_spp', $id);
            return $this->db->update('spp', array('bulan' => $bulan, 'nominal' => $nominal));
        }

        public function delete($id)
        {
            return $this->db->delete('spp', array('id_spp' => $id));
        }
    }

?>