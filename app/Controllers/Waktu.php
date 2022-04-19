<?php namespace App\Controllers;
use App\Models\WaktuModel;
use App\Models\JadwalModel;
class Waktu extends BaseController
{
    protected $WaktuModel;

    public function __construct()
    {
        $this->WaktuModel = new WaktuModel();
        $this->JadwalModel = new JadwalModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Jadwal',
            'waktu' => $this->WaktuModel->get_waktu(),
            'jadwal' => $this->JadwalModel->get_jadwal(),
			'isi' => 'waktu/v_list',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function add()
	{
		$data=[
            'title' => 'Add Waktu',
			'isi' => 'waktu/v_add',
		];
		echo view('layout/v_wrapper',$data);

    }

    public function save_add()
	{
		$data=[
            'TGL' => $this->request->getPost('TGL'),
            'JAM' => $this->request->getPost('JAM'),
		];
        
        $this->WaktuModel->insert_waktu($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('waktu'));

    }

    public function edit($ID_WAKTU)
	{
		$data=[
            'title' => 'Edit Jadwal',
            'waktu' => $this->WaktuModel->edit_waktu($ID_WAKTU),
            'isi' => 'waktu/v_edit',
		];
        
        echo view('layout/v_wrapper', $data);

    }

    public function update($ID_WAKTU)
	{
		$data=[
            'TGL' => $this->request->getPost('TGL'),
            'JAM' => $this->request->getPost('JAM'),
		];
        
        $this->WaktuModel->update_waktu($data, $ID_WAKTU);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('waktu'));

    }

    public function delete($ID_WAKTU)
	{
        
        $this->WaktuModel->delete_waktu($ID_WAKTU);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('waktu'));

    }
	//--------------------------------------------------------------------

}
