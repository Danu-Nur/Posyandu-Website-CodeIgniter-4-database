<?php namespace App\Models;

use CodeIgniter\Model;

class ImunisasiModel extends Model
{
    public function get_imunisasi()
    {
        return $this->db->table('imunisasi')->get()->getResultArray();
    }

    public function insert_imunisasi($data)
    {
        return $this->db->table('imunisasi')->insert($data);
    }

    public function edit_imunisasi($ID_IMUN)
    {
        $query = $this->db->query("select * from imunisasi where ID_IMUN = $ID_IMUN");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_imunisasi($data, $ID_IMUN)
    {
        $builder = $this->db->table('imunisasi');
        $builder->where('ID_IMUN', $ID_IMUN);
        $builder->update($data);
        return $builder;
    }

    public function delete_imunisasi($ID_IMUN)
    {
        $builder = $this->db->table('imunisasi');
        $builder->where('ID_IMUN', $ID_IMUN);
        $builder->delete();
        return $builder;
    }
}

