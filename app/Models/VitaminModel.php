<?php namespace App\Models;

use CodeIgniter\Model;

class VitaminModel extends Model
{
    public function get_vitamin()
    {
        return $this->db->table('vitamin')->get()->getResultArray();
    }

    public function insert_vitamin($data)
    {
        return $this->db->table('vitamin')->insert($data);
    }

    public function edit_vitamin($ID_VITAMIN)
    {
        $query = $this->db->query("select * from vitamin where ID_VITAMIN = $ID_VITAMIN");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_vitamin($data, $ID_VITAMIN)
    {
        $builder = $this->db->table('vitamin');
        $builder->where('ID_VITAMIN', $ID_VITAMIN);
        $builder->update($data);
        return $builder;
    }

    public function delete_vitamin($ID_VITAMIN)
    {
        $builder = $this->db->table('vitamin');
        $builder->where('ID_VITAMIN', $ID_VITAMIN);
        $builder->delete();
        return $builder;
    }
}

