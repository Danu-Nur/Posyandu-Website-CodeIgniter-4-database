<?php namespace App\Models;

use CodeIgniter\Model;

class UserrModel extends Model
{
    public function get_userr()
    {
        $sql="SELECT *, userr.*, jenis_kelamin.JENIS_KELAMIN
        FROM userr INNER JOIN jenis_kelamin
        ON userr.ID_JK = jenis_kelamin.ID_JK";
        return $this->db->query($sql)->getResultArray();
    }

    public function get_jenis_kelamin()
    {
        return $this->db->table('jenis_kelamin')->get()->getResultArray();
    }

    public function insert_userr($data)
    {
        return $this->db->table('userr')->insert($data);
    }

    public function edit_userr($ID_USER)
    {
        $query = $this->db->query("select * from userr where ID_USER = $ID_USER");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_userr($data, $ID_USER)
    {
        $builder = $this->db->table('userr');
        $builder->where('ID_USER', $ID_USER);
        $builder->update($data);
        return $builder;
    }

    public function delete_userr($ID_USER)
    {
        $builder = $this->db->table('userr');
        $builder->where('ID_USER', $ID_USER);
        $builder->delete();
        return $builder;
    }
}

