<?php namespace App\Controllers;
use App\Models\VitaminModel;
class Vitamin extends BaseController
{
    protected $VitaminModel;

    public function __construct()
    {
        $this->VitaminModel = new VitaminModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Vitamin',
            'vitamin' => $this->VitaminModel->get_vitamin(),
			'isi' => 'vitamin/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add Vitamin',
			'isi' => 'vitamin/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'NAMA_VITAMIN' => $this->request->getPost('NAMA_VITAMIN'),
            'KETERANGAN_VIT' => $this->request->getPost('KETERANGAN_VIT'),
		];
        
        $this->VitaminModel->insert_vitamin($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('vitamin'));

    }

    public function edit($ID_VITAMIN)
	{
		$data=[
            'title' => 'Edit Vitamin',
            'vitamin' => $this->VitaminModel->edit_vitamin($ID_VITAMIN),
            'isi' => 'vitamin/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_VITAMIN)
	{
		$data=[
            'NAMA_VITAMIN' => $this->request->getPost('NAMA_VITAMIN'),
            'KETERANGAN_VIT' => $this->request->getPost('KETERANGAN_VIT'),
		];
        
        $this->VitaminModel->update_vitamin($data, $ID_VITAMIN);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('vitamin'));

    }

    public function delete($ID_VITAMIN)
	{
        
        $this->VitaminModel->delete_vitamin($ID_VITAMIN);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('vitamin'));

    }
	//--------------------------------------------------------------------

}
