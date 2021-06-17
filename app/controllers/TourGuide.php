<?php

class TourGuide extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar TourGuide';
        $data['tour'] = $this->model('User_model')->getAllTourGuide();
        $this->view('templates/header', $data);
        $this->view('tourguide/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail TourGuide';
        $data['tour'] = $this->model('User_model')->getTourGuideById($id);
        $this->view('templates/header', $data);
        $this->view('tourguide/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
    
        if( $this->model('User_model')->tambahDataTourGuide($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        } else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        }
    }

    public function hapus($id)
    {
    
        if( $this->model('User_model')->hapusDataTourGuide($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('User_model')->getTourGuideById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('User_model')->ubahDataTourGuide($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        } else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/tourguide');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Daftar TourGuide';
        $data['tour'] = $this->model('User_model')->cariDataTourGuide();
        $this->view('templates/header', $data);
        $this->view('tourguide/index', $data);
        $this->view('templates/footer');
    }
}


