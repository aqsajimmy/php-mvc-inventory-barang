<?php
error_reporting(0);
class Barang extends Controller{
    public function index() {
        $data['judul'] = 'Data Barang';
        $data['brg'] = $this->model('Barang_model')->getAllBarang();
        $this->view('template/header', $data);
        $this->view('barang/index', $data);
        $this->view('template/footer');
        
    }

    public function detail($id) {
        // if($id == !NULL)
         
        $data['judul'] = 'Detail Barang';
        $data['brg'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('template/header', $data);
        $this->view('barang/detail', $data);
        $this->view('template/footer');
        
    }
    public function cari() {
        $data['judul'] = 'Cari Data Barang';
        $data['brg'] = $this->model('Barang_model')->cariBarang();
        $this->view('template/header', $data);
        $this->view('barang/index', $data);
        $this->view('template/footer');
        

    }


}