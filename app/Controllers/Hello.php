<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class Hello extends Controller
{
    public function index()
    {
        $data['title'] = "Tugas_2-UAS-1915016123-ZulfikarRM_UNMUL";
        echo view('hello_view', $data);
    }
 
}