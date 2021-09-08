<?php

class Admin_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Databases;
    }

    public function getAllBarang() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang VALUES 
        ('', :nama_barang, :kategori, :jumlah, :satuan, :hmodal, :htoko, :hkusus, :huser)";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('hmodal', $data['hmodal']);
        $this->db->bind('htoko', $data['htoko']);
        $this->db->bind('hkusus', $data['hkusus']);
        $this->db->bind('huser', $data['huser']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id) {
        $query = " DELETE FROM barang WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang SET
                    nama_barang = :nama_barang,
                    kategori = :kategori,
                    jumlah = :jumlah,
                    satuan = :satuan,
                    hmodal = :hmodal,
                    htoko = :htoko,
                    hkusus = :hkusus,
                    huser = :huser
                    WHERE id = :id
                    ";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('hmodal', $data['hmodal']);
        $this->db->bind('htoko', $data['htoko']);
        $this->db->bind('hkusus', $data['hkusus']);
        $this->db->bind('huser', $data['huser']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarang() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM barang WHERE nama_barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();

    }



}