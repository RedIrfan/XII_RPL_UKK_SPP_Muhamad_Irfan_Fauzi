<?php 

    class Pembayaran extends CI_Model{
        
        protected function join()
        {
            $this->db->join('petugas', 'pembayaran.id_petugas = petugas.id_petugas');
            $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
            $this->db->join('spp', 'pembayaran.id_spp = spp.id_spp');
        }

        public function get()
        {
            $this->join();
            return $this->db->get('pembayaran')->result();
        }

        public function get_where($id)
        {
            $this->join();
            return $this->db->get_where('pembayaran', array('id_pembayaran' => $id))->result();
        }

        public function get_where_by_spp($id_spp)
        {
            $this->join();
            return $this->db->get_where('pembayaran', array('pembayaran.id_spp' => $id_spp))->result();
        }

        public function insert($id_petugas, $nisn, $tgl_bayar, $bulan_dibayar, $tahun_dibayar, $id_spp, $jumlah_bayar)
        {
            return $this->db->insert('pembayaran', array('id_petugas' => $id_petugas, 'nisn' => $nisn, 'tgl_bayar' => $tgl_bayar, 'bulan_dibayar' => $bulan_dibayar, 'tahun_dibayar' => $tahun_dibayar, 'id_spp' => $id_spp, 'jumlah_bayar' => $jumlah_bayar));
        }

        public function update($id_pembayaran, $id_petugas, $nisn, $tgl_bayar, $bulan_dibayar, $tahun_dibayar, $id_spp, $jumlah_bayar)
        {
            $this->db->where('id_pembayaran', $id_pembayaran);
            return $this->db->update('pembayaran', array('id_petugas' => $id_petugas, 'nisn' => $nisn, 'tgl_bayar' => $tgl_bayar, 'bulan_dibayar' => $bulan_dibayar, 'tahun_dibayar' => $tahun_dibayar, 'id_spp' => $id_spp, 'jumlah_bayar' => $jumlah_bayar));
        }

        public function delete($id_pembayaran)
        {
            return $this->db->delete('pembayaran', array('id_pembayaran' => $id_pembayaran));
        }
    }

?>