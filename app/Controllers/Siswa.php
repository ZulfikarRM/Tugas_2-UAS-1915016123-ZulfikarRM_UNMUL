<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Siswa_model;
 
class Siswa extends Controller
{
    public function index()
    {
        $model = new Siswa_model();
        $data['calon_siswa'] = $model->getSiswa();
        echo view('siswa_view',$data);
    }
 
    public function add_new()
    {
        echo view('add_siswa_view');
    }
 
    public function save()
    {
        $model = new Siswa_model();
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'kursus'  => $this->request->getPost('kursus'),
            'kelas'  => $this->request->getPost('kelas'),
        );
        $model->saveSiswa($data);
        return redirect()->to('/Siswa');
    }

    public function edit($id)
    {
        $model = new Siswa_model();
        $data['calon_siswa'] = $model->getSiswa($id)->getRow();
        echo view('edit_siswa_view', $data);
    }
 
    public function update()
    {
        $model = new Siswa_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'kursus'  => $this->request->getPost('kursus'),
            'kelas'  => $this->request->getPost('kelas'),
        );
        $model->updateSiswa($data, $id);
        return redirect()->to('/Siswa');
    }

    public function delete($id)
    {
        $model = new Siswa_model();
        $model->deleteSiswa($id);
        return redirect()->to('/Siswa');
    }
}