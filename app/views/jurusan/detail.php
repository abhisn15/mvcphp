<div class="container mb-5" style="margin-top: 100px;">
    <div class="container d-flex justify-content-center align-items-center mt-4" style="height: 80vh;"
        data-aos="flip-right" data-aos-duration="1000">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="<?= BASEURL; ?>img/jurusan/<?= $data['jurusan']['jurusan'] ?>.jpg"
                    class="rounded mb-2 card-img-top" alt="Jurusan Photo">
                <h5 class="card-title mb-2"><?= $data['jurusan']['jurusan']; ?></h5>
                <p class="card-text" id="deskripsi"
                    style=" overflow: hidden; text-overflow: ellipsis; max-width: 260px;">
                    <?= substr($data['jurusan']['deskripsi'], 0, 115); ?>...
                    <a href="#" id="selengkapnya" onclick="tampilkanSelengkapnya()">Selengkapnya</a>
                </p>
                <a href="<?= BASEURL; ?>jurusan"
                    class="btn btn-primary text-white text-decoration-none card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script>
function tampilkanSelengkapnya() {
    var deskripsiPotongan = document.getElementById("deskripsi");
    var deskripsiSelengkapnya = "<?= $data['jurusan']['deskripsi']; ?>"; // Isi dengan deskripsi lengkap
    var tombolSelengkapnya = document.getElementById("selengkapnya");

    if (deskripsiPotongan.style.whiteSpace === "") {
        // Tampilkan deskripsi lengkap
        deskripsiPotongan.style.whiteSpace = "normal";
        deskripsiPotongan.style.maxWidth = "none";
        deskripsiPotongan.innerHTML = deskripsiSelengkapnya;
    }
}
</script>