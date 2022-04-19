<?php namespace App\Models;

use CodeIgniter\Model;

class KaderModel extends Model
{
    public function get_kader()
    {
        $sql="SELECT *, kader.*, jenis_kelamin.JENIS_KELAMIN
        FROM kader INNER JOIN jenis_kelamin
        ON kader.ID_JK = jenis_kelamin.ID_JK";
        return $this->db->query($sql)->getResultArray();
    }

    public function get_jenis_kelamin()
    {
        return $this->db->table('jenis_kelamin')->get()->getResultArray();
    }

    public function insert_kader($data)
    {
        return $this->db->table('kader')->insert($data);
    }

    public function edit_kader($ID_KADER)
    {
        $query = $this->db->query("select * from kader where ID_KADER = $ID_KADER");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_kader($data, $ID_KADER)
    {
        $builder = $this->db->table('kader');
        $builder->where('ID_KADER', $ID_KADER);
        $builder->update($data);
        return $builder;
    }

    public function delete_kader($ID_KADER)
    {
        $builder = $this->db->table('kader');
        $builder->where('ID_KADER', $ID_KADER);
        $builder->delete();
        return $builder;
    }
}

