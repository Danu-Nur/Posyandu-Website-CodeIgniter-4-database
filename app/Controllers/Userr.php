<?php namespace App\Controllers;
use App\Models\UserrModel;
use App\Models\JenisKelaminModel;
class Userr extends BaseController
{
    protected $UserrModel;

    public function __construct()
    {
        $this->UserrModel = new UserrModel();
        $this->JenisKelaminModel = new JenisKelaminModel();
    }
	public function index()
	{
		$data=[
            'title' => 'User',
            'userr' => $this->UserrModel->get_userr(),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
			'isi' => 'userr/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add User',
            'userr' => $this->UserrModel->get_userr(),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
			'isi' => 'userr/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'NO_KK' => $this->request->getPost('NO_KK'),
            'NAMA_AYAH' => $this->request->getPost('NAMA_AYAH'),
            'NAMA_IBU' => $this->request->getPost('NAMA_IBU'),
            'NAMA_BALITA' => $this->request->getPost('NAMA_BALITA'),
            'TTL_BALITA' => $this->request->getPost('TTL_BALITA'),
            'ID_JK' => $this->request->getPost('ID_JK'),
            'ALAMAT' => $this->request->getPost('ALAMAT'),
            'NO_TELP' => $this->request->getPost('NO_TELP'),
            'USERNAMA' => $this->request->getPost('USERNAMA'),
            'PASS' => $this->request->getPost('PASS'),
		];
        
        $this->UserrModel->insert_userr($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('userr'));

    }

    public function edit($ID_USER)
	{
		$data=[
            'title' => 'Edit User',
            'userr' => $this->UserrModel->edit_userr($ID_USER),
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
            'isi' => 'userr/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_USER)
	{
		$data=[
            'NO_KK' => $this->request->getPost('NO_KK'),
            'NAMA_AYAH' => $this->request->getPost('NAMA_AYAH'),
            'NAMA_IBU' => $this->request->getPost('NAMA_IBU'),
            'NAMA_BALITA' => $this->request->getPost('NAMA_BALITA'),
            'TTL_BALITA' => $this->request->getPost('TTL_BALITA'),
            'ID_JK' => $this->request->getPost('ID_JK'),
            'ALAMAT' => $this->request->getPost('ALAMAT'),
            'NO_TELP' => $this->request->getPost('NO_TELP'),
            'USERNAMA' => $this->request->getPost('USERNAMA'),
            'PASS' => $this->request->getPost('PASS'),
		];
        
        $this->UserrModel->update_userr($data, $ID_USER);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('userr'));

    }

    public function delete($ID_USER)
	{
        
        $this->UserrModel->delete_userr($ID_USER);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('userr'));

    }
	//--------------------------------------------------------------------

}
