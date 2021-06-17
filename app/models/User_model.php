<?php

class User_model {
    private $table = 'tb_tourguide';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTourGuide() 
    {
       
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTourGuideById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    } 

    public function tambahDataTourGuide($data)
    {
        $query = "INSERT INTO tb_tourguide VALUES ('', :nama, :daerah, :nilai, :no_hp)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('daerah', $data['daerah']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();


        
    }

    public function hapusDataTourGuide($id)
    {
        $query = "DELETE FROM tb_tourguide WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function ubahDataTourGuide($data)
    {
        $query = "UPDATE tb_tourguide SET nama = :nama, daerah = :daerah, nilai = :nilai, no_hp = :no_hp WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('daerah', $data['daerah']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();


        
    }

    public function cariDataTourGuide()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tb_tourguide WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}