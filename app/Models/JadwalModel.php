<?php namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    public function get_jadwal()
    {
        $sql = "SELECT waktu.TGL, waktu.JAM
        FROM jadwal INNER JOIN waktu
        ON jadwal.ID_WAKTU = waktu.ID_WAKTU
        WHERE jadwal.ID_WAKTU = waktu.ID_WAKTU";
        return $this->db->query($sql)->getResultArray();
    }

}

