<?php namespace App\Models;
use CodeIgniter\Model;
 
class Siswa_model extends Model
{
    protected $table = 'calon_siswa';
     
    public function getSiswa($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
 
    public function saveSiswa($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateSiswa($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
 
    public function deleteSiswa($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 
}