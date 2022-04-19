<?php namespace App\Controllers;
use App\Models\JadwalModel;
class Jadwal extends BaseController
{
    protected $JadwalModel;

    public function __construct()
    {
        $this->JadwalModel = new JadwalModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Jadwal',
            'jadwal' => $this->JadwalModel->get_jadwal(),
            'isi' => 'home/v_list',
			
		];
		echo view('layout/v_wrapper',$data);

    }

	//--------------------------------------------------------------------

}
