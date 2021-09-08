<?php
error_reporting(0);
class Admin extends Controller{
    public function index() {
        $data['judul'] = 'Admin | Kelola Data';
        $data['brg'] = $this->model('Admin_model')->getAllBarang();
        $this->view('template/header', $data);
        $this->view('admin/index', $data);
        $this->view('template/footer');
        
    }

    public function detail($id) {
        // if($id == !NULL)
         
        $data['judul'] = 'Detail Barang';
        $data['brg'] = $this->model('Admin_model')->getBarangById($id);
        $this->view('template/header', $data);
        $this->view('admin/detail', $data);
        $this->view('template/footer');
        
    }

    public function tambah() {
        if( $this->model('Admin_model')->tambahDataBarang($_POST) > 0 ) {
            Flasher::setFlash('berhasil',' ditambahkan','success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal',' ditambahkan','danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('Admin_model')->hapusDataBarang($id) > 0 ) {
            Flasher::setFlash('berhasil',' dihapus','success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal',' dihapus','danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }


    public function getubah()
    {
        echo json_encode($this->model('Admin_model')->getBarangById($_POST['id'])); 
    }

    public function ubahdata() {
        if( $this->model('Admin_model')->ubahDataBarang($_POST) > 0 ) {
            Flasher::setFlash('berhasil',' diubah','success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal',' diubah','danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }
    public function cari() {
        $data['judul'] = 'Cari Data Barang';
        $data['brg'] = $this->model('Admin_model')->cariBarang();
        $this->view('template/header', $data);
        $this->view('admin/index', $data);
        $this->view('template/footer');
        

    }


}