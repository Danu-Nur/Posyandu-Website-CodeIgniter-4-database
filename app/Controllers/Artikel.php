<?php namespace App\Controllers;
use App\Models\ArtikelModel;
class Artikel extends BaseController
{
    protected $ArtikelModel;

    public function __construct()
    {
        helper('form');
        $this->ArtikelModel = new ArtikelModel();
    }
	public function index()
	{
       
		
        if (!$this->validate([]))
        {
            $data=[
                'title' => 'Artikel',
                'validation' => $this->validator,
                'artikel' => $this->ArtikelModel->get_artikel(),
                'isi' => 'artikel/v_list',
            ];
        
           
            echo view('layout/v_wrapper', $data);
        }

    }

    

    public function add()
	{
		
        if (!$this->validate([]))
        {
            $data=[
                'title' => 'Artikel',
                'validation' => $this->validator,
                'isi' => 'artikel/v_add',
            ];
        
           
            echo view('layout/v_wrapper', $data);
        }

    }

    public function save_add()
	{

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('artikel'));
        }
        $validated = $this->validate([
            'FOTO_ARTIKEL' => 'uploaded[FOTO_ARTIKEL]|mime_in[FOTO_ARTIKEL,image/jpg,image/jpeg,image/gif,image/png]|max_size[FOTO_ARTIKEL,4096]'
        ]);
 
        if ($validated == FALSE) {
            
            // Kembali ke function index supaya membawa data uploads dan validasi
           
            return $this->add();

        } else {

            $foto = $this->request->getFile('FOTO_ARTIKEL');
            $foto->move(ROOTPATH . 'public/uploads');

            $data = [
                'JUDUL' => $this->request->getPost('JUDUL'),
                'FOTO_ARTIKEL' => $foto->getName(),
                'ISI_ARTIKEL' => $this->request->getPost('ISI_ARTIKEL'),
            ];
    
            $this->ArtikelModel->insert_artikel($data);
        session()->setFlashdata('success','Data Berhasil Disimpan');
        return redirect()->to(base_url('artikel'));
        }

    }
        
    

    public function edit($ID_ARTIKEL)
	{
        if (!$this->validate([]))
        {
            $data=[
                'title' => 'Edit Artikel',
                'validation' => $this->validator,
                'artikel' => $this->ArtikelModel->edit_artikel($ID_ARTIKEL),
                'isi' => 'artikel/v_edit',
            ];
        
           
            echo view('layout/v_wrapper', $data);
        }

    }

    public function update($ID_ARTIKEL)
	{ 
        
        $validated = $this->validate([
            'FOTO_ARTIKEL' => 'uploaded[FOTO_ARTIKEL]|mime_in[FOTO_ARTIKEL,image/jpg,image/jpeg,image/gif,image/png]|max_size[FOTO_ARTIKEL,4096]'
        ]);
 
        if ($validated == FALSE) {
            
            // Kembali ke function index supaya membawa data uploads dan validasi
           
            return $this->edit($ID_ARTIKEL);

        } else{

            $foto = $this->request->getFile('FOTO_ARTIKEL');
            $foto->move(ROOTPATH . 'public/uploads');

            $data = [
                'JUDUL' => $this->request->getPost('JUDUL'),
                'FOTO_ARTIKEL' => $foto->getName(),
                'ISI_ARTIKEL' => $this->request->getPost('ISI_ARTIKEL'),
            ];
    
            $this->ArtikelModel->update_artikel($data, $ID_ARTIKEL);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('artikel'));
        }

    }

    public function delete($ID_ARTIKEL)
	{
        
        $this->ArtikelModel->delete_artikel($ID_ARTIKEL);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('artikel'));

    }
	//--------------------------------------------------------------------

}
