<?php namespace App\Models;

use CodeIgniter\Model;

class JenisKelaminModel extends Model
{
    public function get_jenis_kelamin()
    {
        return $this->db->table('jenis_kelamin')->get()->getResultArray();
    }

}

