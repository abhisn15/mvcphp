<div class="container d-flex justify-content-center mb-5" style="margin-top: 100px">
    <div class="card" style="width: 18rem;" data-aos="flip-right" data-aos-duration="1000">
        <div class="card-body">
            <h5 class="card-title mb-4"></h5>
            <img src="<?= BASEURL; ?>img/kelas/<?= $data['kelas']['kelas'] ?>.png" class="rounded mb-2 card-img-top">
            <p class="card-text ms-1 mt-3">Kelas: <?= $data['kelas']['kelas']; ?></p>
            <a href="<?= BASEURL; ?>kelas " class="btn btn-primary card-link">Kembali</a>
        </div>
    </div>
</div>