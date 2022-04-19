<?php namespace App\Models;

use CodeIgniter\Model;

class WaktuModel extends Model
{
    public function get_waktu()
    {
        return $this->db->table('waktu')->get()->getResultArray();
    }

    public function insert_waktu($data)
    {
        return $this->db->table('waktu')->insert($data);
    }

    public function edit_waktu($ID_WAKTU)
    {
        $query = $this->db->query("select * from waktu where ID_WAKTU = $ID_WAKTU");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_waktu($data, $ID_WAKTU)
    {
        $builder = $this->db->table('waktu');
        $builder->where('ID_WAKTU', $ID_WAKTU);
        $builder->update($data);
        return $builder;
    }

    public function delete_waktu($ID_WAKTU)
    {
        $builder = $this->db->table('waktu');
        $builder->where('ID_WAKTU', $ID_WAKTU);
        $builder->delete();
        return $builder;
    }
}

