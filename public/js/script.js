// Ketika documentnya sudah siap, jalankan fungsinya
$(function () {
    // jquery tolong carikan saya kelas bernama tombolTambahData ketika di klik, jquery tolong carikan saya id judul modal lalu ubah menjadi tambah data siswa
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Siswa')
        $('.modal-footer button[type=submit]').html('Tambah Data')
    })

    // jquery tolong carikan saya kelas bernama tombolModalUbah ketika di klik, jquery tolong carikan saya id judulModal lalu ubah menjadi ubah data siswa
    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Siswa')
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/abhi/phpmvc/public/siswa/getUbah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/abhi/phpmvc/public/siswa/getUbah',
            data: { id: id }, //id yang kiri data yang dikirimkan sedangkan yang kanan itu adalah isi datanya
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama)
                $('#umur').val(data.umur)
                $('#kelas').val(data.kelas)
                $('#jurusan').val(data.jurusan)
                $('#id').val(data.id)
            }
        })
    })
});