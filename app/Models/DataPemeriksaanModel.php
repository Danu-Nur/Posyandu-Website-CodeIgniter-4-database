<?php namespace App\Models;

use CodeIgniter\Model;

class DataPemeriksaanModel extends Model
{
    public function get_data_pemeriksaan()
    {
        $sql = "SELECT
        kader.NAMA_KADER, userr.NAMA_BALITA, vitamin.NAMA_VITAMIN, 
        imunisasi.JENIS_IMUN, jadwal.ID_WAKTU, waktu.TGL, 
        data_pemeriksaan.BERAT_BADAN, data_pemeriksaan.TINGGI_BADAN,
        data_pemeriksaan.ID_PERIKSA
        FROM data_pemeriksaan INNER JOIN kader
        ON data_pemeriksaan.ID_KADER = kader.ID_KADER
        INNER JOIN userr
        ON data_pemeriksaan.ID_USER = userr.ID_USER
        INNER JOIN vitamin
        ON data_pemeriksaan.ID_VITAMIN = vitamin.ID_VITAMIN
        INNER JOIN imunisasi
        ON data_pemeriksaan.ID_IMUN = imunisasi.ID_IMUN
        INNER JOIN jadwal
        ON data_pemeriksaan.ID_JADWAL = jadwal.ID_JADWAL
        INNER JOIN waktu
        ON jadwal.ID_WAKTU = waktu.ID_WAKTU;";
       return $this->db->query($sql)->getResultArray();
    }

    public function get_kader()
    {
        return $this->db->table('kader')->get()->getResultArray();
    }

    public function get_userr()
    {
        return $this->db->table('userr')->get()->getResultArray();
    }

    public function get_vitamin()
    {
        return $this->db->table('vitamin')->get()->getResultArray();
    }

    public function get_imunisasi()
    {
        return $this->db->table('imunisasi')->get()->getResultArray();
    }

    public function get_jadwal()
    {
        return $this->db->table('jadwal')->get()->getResultArray();
    }

    public function get_waktu()
    {
        return $this->db->table('waktu')->get()->getResultArray();
    }

    public function insert_data_pemeriksaan($data)
    {
        return $this->db->table('data_pemeriksaan')->insert($data);
    }

    public function edit_data_pemeriksaan($ID_PERIKSA)
    {
        $query = $this->db->query("select * from data_pemeriksaan where ID_PERIKSA = $ID_PERIKSA");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_data_pemeriksaan($data, $ID_PERIKSA)
    {
        $builder = $this->db->table('data_pemeriksaan');
        $builder->where('ID_PERIKSA', $ID_PERIKSA);
        $builder->update($data);
        return $builder;
    }

    public function delete_data_pemeriksaan($ID_PERIKSA)
    {
        $builder = $this->db->table('data_pemeriksaan');
        $builder->where('ID_PERIKSA', $ID_PERIKSA);
        $builder->delete();
        return $builder;
    }
}

