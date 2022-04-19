<?php namespace App\Controllers;

use App\Models\JadwalModel;
class Home extends BaseController
{
	public function __construct()
    {
        $this->JadwalModel = new JadwalModel();
    }
	public function index()
	{
		$data=[
			'title' => 'HOME',
            'jadwal' => $this->JadwalModel->get_jadwal(),
			'isi' => 'home/v_list',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function vitamin()
	{
		$data=[
			'title' => 'Data Vitamin',
			'isi' => 'v_vitamin',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function imunisasi()
	{
		$data=[
			'title' => 'Data Imunisasi',
			'isi' => 'v_imunisasi',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function pemeriksaan()
	{
		$data=[
			'title' => 'Data Pemeriksaan',
			'isi' => 'v_pemeriksaan',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function jadwal()
	{
		$data=[
			'title' => 'Data Jadwal',
			'isi' => 'v_jadwal',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function kader()
	{
		$data=[
			'title' => 'Data Kader',
			'isi' => 'v_kader',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function user()
	{
		$data=[
			'title' => 'Data User',
			'isi' => 'v_user',
		];
		echo view('layout/v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
