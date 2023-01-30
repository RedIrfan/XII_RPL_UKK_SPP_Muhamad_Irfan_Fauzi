<?php 

    class Siswa extends CI_Model{
        
        protected function join()
        {
            $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
            $this->db->join('spp', 'spp.id_spp = siswa.id_spp');
        }

        public function get()
        {
            $this->join();
            return $this->db->get('siswa')->result();
        }

        public function get_where($nisn)
        {
            $this->join();
            return $this->db->get_where('siswa', array('nisn' => $nisn))->result();
        }

        public function insert($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp)
        {
            return $this->db->insert('siswa', array('nisn' => $nisn, 'nis' => $nis, 'nama' => $nama, 'id_kelas' => $id_kelas, 'alamat' => $alamat, 'no_telp' => $no_telp, 'id_spp' => $id_spp));
        }

        public function update($nisn, $new_nisn, $nama, $id_kelas, $alamat, $no_telp, $id_spp)
        {
            $this->db->where('nisn', $nisn);
            return $this->db->update('siswa', array('nisn' => $new_nisn, 'nama' => $nama, 'id_kelas' => $id_kelas, 'alamat' => $alamat, 'no_telp' => $no_telp, 'id_spp' => $id_spp));
        }

        public function delete($nisn)
        {
            return $this->db->delete('siswa', array('nisn' => $nisn));
        }
    }

?>