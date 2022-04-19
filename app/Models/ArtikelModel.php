<?php namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table;

    public function __construct() {

        parent::__construct();
        $db = \Config\Database::connect();
        $this->table = $this->db->table('artikel');
    }
    public function get_artikel()
    {
        return $this->db->table('artikel')->get()->getResultArray();
    }

    public function insert_artikel($data)
    {
        return $this->db->table('artikel')->insert($data);
    }

    public function edit_artikel($ID_ARTIKEL)
    {
        $query = $this->db->query("select * from artikel where ID_ARTIKEL = $ID_ARTIKEL");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_artikel($data, $ID_ARTIKEL)
    {
        $builder = $this->db->table('artikel');
        $builder->where('ID_ARTIKEL', $ID_ARTIKEL);
        $builder->update($data);
        return $builder;
    }

    public function delete_artikel($ID_ARTIKEL)
    {
        $builder = $this->db->table('artikel');
        $builder->where('ID_ARTIKEL', $ID_ARTIKEL);
        $builder->delete();
        return $builder;
    }
}

