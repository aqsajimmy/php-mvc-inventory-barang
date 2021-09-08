<?php

class About extends Controller {
    public function index($nama ='User', $job = 'admin', $judul = 'About Pages' ) {
        
        
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['judul'] = $judul;
        $this->view('template/header' , $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page( $judul='Pages Pages') {
        $data['judul'] = $judul;
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}