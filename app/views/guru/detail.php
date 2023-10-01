<div class="container mb-5" style="margin-top: 100px;">
    <div class="container d-flex justify-content-center align-items-center mt-4" style="height: 80vh;"
        data-aos="flip-right" data-aos-duration="1000">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="<?= BASEURL; ?>img/guru/<?= $data['guru']['nama'] ?>.jpg" class="rounded mb-2 card-img-top"
                    alt="Guru Photo">
                <h5 class="card-title">Nama Guru: <?= $data['guru']['nama']; ?></h5>
                <p class="card-text">Mapel: <?= $data['guru']['mapel']; ?></p>
                <a href="<?= BASEURL; ?>guru" class="btn btn-primary card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>