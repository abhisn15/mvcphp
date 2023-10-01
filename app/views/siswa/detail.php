<div class="container mb-5" style="margin-top: 100px;">
    <div class="container d-flex justify-content-center align-items-center mt-4" style="height: 80vh;"
        data-aos="flip-right" data-aos-duration="1000">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="<?= BASEURL; ?>img/siswa/<?= $data['siswa']['nama'] ?>.jpg" class="rounded mb-2 card-img-top"
                    alt="Jurusan Photo">
                <h5 class="card-title mb-4"><?= $data['siswa']['nama']; ?></h5>
                <p class="card-subtitle">Umur: <?= $data['siswa']['umur']; ?> Tahun</p>
                <p class="card-text m-0">Kelas: <?= $data['siswa']['kelas']; ?></p>
                <p class="card-text">Jurusan: <?= $data['siswa']['jurusan']; ?></p>
                <a href="<?= BASEURL; ?>siswa" class="btn btn-primary card-link">Kembali</a>
            </div>
        </div>
    </div>