<?php namespace App\Controllers;
use App\Models\KaderModel;
use App\Models\JenisKelaminModel;
class Kader extends BaseController
{
    protected $KaderModel;

    public function __construct()
    {
        $this->KaderModel = new KaderModel();
        $this->JenisKelaminModel = new JenisKelaminModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Kader',
            'kader' => $this->KaderModel->get_kader(),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
			'isi' => 'kader/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add Kader',
            'kader' => $this->KaderModel->get_kader(),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
			'isi' => 'kader/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'NAMA_KADER' => $this->request->getPost('NAMA_KADER'),
            'ALAMAT_KADER' => $this->request->getPost('ALAMAT_KADER'),
            'TELP' => $this->request->getPost('TELP'),
            'ID_JK' => $this->request->getPost('ID_JK'),
            'USERNAMEE' => $this->request->getPost('USERNAMEE'),
            'PASW' => $this->request->getPost('PASW'),
		];
        
        $this->KaderModel->insert_kader($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('kader'));

    }

    public function edit($ID_KADER)
	{
		$data=[
            'title' => 'Edit Kader',
            'kader' => $this->KaderModel->edit_kader($ID_KADER),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
            'isi' => 'kader/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_KADER)
	{
		$data=[
            'NAMA_KADER' => $this->request->getPost('NAMA_KADER'),
            'ALAMAT_KADER' => $this->request->getPost('ALAMAT_KADER'),
            'TELP' => $this->request->getPost('TELP'),
            'ID_JK' => $this->request->getPost('ID_JK'),
            'USERNAMEE' => $this->request->getPost('USERNAMEE'),
            'PASW' => $this->request->getPost('PASW'),
		];
        
        $this->KaderModel->update_kader($data, $ID_KADER);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('kader'));

    }

    public function delete($ID_KADER)
	{
        
        $this->KaderModel->delete_kader($ID_KADER);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('kader'));

    }
	//--------------------------------------------------------------------

}
