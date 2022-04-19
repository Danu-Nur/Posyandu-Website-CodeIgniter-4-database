<?php namespace App\Controllers;
use App\Models\DataPemeriksaanModel;
use App\Models\KaderModel;
use App\Models\UserrModel;
use App\Models\VitaminModel;
use App\Models\ImunisasiModel;
use App\Models\JadwalModel;
use App\Models\WaktuModel;
class Data_Pemeriksaan extends BaseController
{
    protected $DataPemeriksaanModel;

    public function __construct()
    {
        $this->DataPemeriksaanModel = new DataPemeriksaanModel();
        $this->KaderModel = new KaderModel();
        $this->UserrModel = new UserrModel();
        $this->VitaminModel = new VitaminModel();
        $this->ImunisasiModel = new ImunisasiModel();
        $this->JadwalModel = new JadwalModel();
        $this->WaktuModel = new WaktuModel();
    }
	public function index()
	{
    
		$data=[
            'title' => 'Pemeriksaan',
            'data_pemeriksaan' => $this->DataPemeriksaanModel->get_data_pemeriksaan(),
            'kader' => $this->KaderModel->get_kader(),
            'userr' => $this->UserrModel->get_userr(),
            'vitamin' => $this->VitaminModel->get_vitamin(),
            'imunisasi' => $this->ImunisasiModel->get_imunisasi(),
            'jadwal' => $this->JadwalModel->get_jadwal(),
            'waktu' => $this->WaktuModel->get_waktu(),
			'isi' => 'data_pemeriksaan/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add Data Pemeriksaan',
            'data_pemeriksaan' => $this->DataPemeriksaanModel->get_data_pemeriksaan(),
            'kader' => $this->KaderModel->get_kader(),
            'userr' => $this->UserrModel->get_userr(),
            'vitamin' => $this->VitaminModel->get_vitamin(),
            'imunisasi' => $this->ImunisasiModel->get_imunisasi(),
            'jadwal' => $this->JadwalModel->get_jadwal(),
            'waktu' => $this->WaktuModel->get_waktu(),
			'isi' => 'data_pemeriksaan/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'ID_KADER' => $this->request->getPost('ID_KADER'),
            'ID_USER' => $this->request->getPost('ID_USER'),
            'ID_VITAMIN' => $this->request->getPost('ID_VITAMIN'),
            'ID_IMUN' => $this->request->getPost('ID_IMUN'),
            'ID_JADWAL' => $this->request->getPost('ID_JADWAL'),
            'BERAT_BADAN' => $this->request->getPost('BERAT_BADAN'),
            'TINGGI_BADAN' => $this->request->getPost('TINGGI_BADAN'),
		];
        
        $this->DataPemeriksaanModel->insert_data_pemeriksaan($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('data_pemeriksaan'));

    }

    public function edit($ID_PERIKSA)
	{
		$data=[
            'title' => 'Edit Data Pemeriksaan',
            'data_pemeriksaan' => $this->DataPemeriksaanModel->edit_data_pemeriksaan($ID_PERIKSA),
            'kader' => $this->KaderModel->get_kader(),
            'userr' => $this->UserrModel->get_userr(),
            'vitamin' => $this->VitaminModel->get_vitamin(),
            'imunisasi' => $this->ImunisasiModel->get_imunisasi(),
            'jadwal' => $this->JadwalModel->get_jadwal(),
            'waktu' => $this->WaktuModel->get_waktu(),
            'isi' => 'data_pemeriksaan/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_PERIKSA)
	{
		$data=[
            'ID_KADER' => $this->request->getPost('ID_KADER'),
            'ID_USER' => $this->request->getPost('ID_USER'),
            'ID_VITAMIN' => $this->request->getPost('ID_VITAMIN'),
            'ID_IMUN' => $this->request->getPost('ID_IMUN'),
            'ID_JADWAL' => $this->request->getPost('ID_JADWAL'),
            'BERAT_BADAN' => $this->request->getPost('BERAT_BADAN'),
            'TINGGI_BADAN' => $this->request->getPost('TINGGI_BADAN'),
		];
        
        $this->DataPemeriksaanModel->update_data_pemeriksaan($data, $ID_PERIKSA);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('data_pemeriksaan'));

    }

    public function delete($ID_PERIKSA)
	{
        
        $this->DataPemeriksaanModel->delete_data_pemeriksaan($ID_PERIKSA);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('data_pemeriksaan'));

    }
	//--------------------------------------------------------------------

}
