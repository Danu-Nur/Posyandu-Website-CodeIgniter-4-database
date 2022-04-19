<?php namespace App\Controllers;
use App\Models\JenisKelaminModel;
class Jenis_Kelamin extends BaseController
{
    protected $JenisKelaminModel;

    public function __construct()
    {
        $this->JenisKelaminModel = new JenisKelaminModel();
    }
	public function index()
	{
		$data=[
            'title' => 'Jenis Kelamin',
            'jenis_kelamin' => $this->JenisKelaminModel->get_jenis_kelamin(),
			
		];
		echo view('layout/v_wrapper',$data);

    }

	//--------------------------------------------------------------------

}
