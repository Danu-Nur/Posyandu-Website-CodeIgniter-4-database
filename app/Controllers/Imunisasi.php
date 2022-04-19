<?php namespace App\Controllers;
use App\Models\ImunisasiModel;
class Imunisasi extends BaseController
{
    protected $ImunisasiModel;

    public function __construct()
    {
        $this->ImunisasiModel = new ImunisasiModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Imunisasi',
            'imunisasi' => $this->ImunisasiModel->get_imunisasi(),
			'isi' => 'imunisasi/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add Imunisasi',
			'isi' => 'imunisasi/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'JENIS_IMUN' => $this->request->getPost('JENIS_IMUN'),
            'KETERANGAN_IMUN' => $this->request->getPost('KETERANGAN_IMUN'),
		];
        
        $this->ImunisasiModel->insert_imunisasi($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('imunisasi'));

    }

    public function edit($ID_IMUN)
	{
		$data=[
            'title' => 'Edit Imunisasi',
            'imunisasi' => $this->ImunisasiModel->edit_imunisasi($ID_IMUN),
            'isi' => 'imunisasi/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_IMUN)
	{
		$data=[
            'JENIS_IMUN' => $this->request->getPost('JENIS_IMUN'),
            'KETERANGAN_IMUN' => $this->request->getPost('KETERANGAN_IMUN'),
		];
        
        $this->ImunisasiModel->update_imunisasi($data, $ID_IMUN);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('imunisasi'));

    }

    public function delete($ID_IMUN)
	{
        
        $this->ImunisasiModel->delete_imunisasi($ID_IMUN);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('imunisasi'));

    }
	//--------------------------------------------------------------------

}
