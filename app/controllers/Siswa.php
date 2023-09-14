<?php
class Siswa extends Controller
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
        $siswaModel = $this->model('Siswa_model');

        // Validasi jika data tidak diisi
        if (empty($_POST['nama']) || empty($_POST['umur'])) {
            Flasher::setFlash('tidak lengkap. Silakan isi semua kolom.', '', 'danger');
        } else {
            if ($siswaModel->tambahDataSiswa($_POST) > 0) {
                Flasher::setFlash('berhasil ditambahkan.', '', 'success');
            }
        }

        header('Location: ' . BASEURL . 'siswa');
        exit;
    }


    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil ', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal ', 'dihapus', 'danger'); // Perbaiki menjadi 'danger'
        }
        header('Location: ' . BASEURL . 'siswa');
        exit;
    }


    public function getUbah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'success');
            header('Location: ' . BASEURL . 'siswa');
            exit;
        }
    }
}
