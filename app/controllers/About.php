<?php

class About extends Controller {
    public function index($nama = 'iiq', $umur = '18' )
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('About/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header',$data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}