<?php

class siswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            Flasher::setFlash('berhasil ', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getsiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahDatasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            Flasher::setFlash('berhasil ', 'diubah', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Jurusan';
        $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}