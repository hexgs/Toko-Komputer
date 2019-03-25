$(function () {

    $('.tombolTambahItem').on('click', function () {
        $('#judulModal').html('Tambah Item');
        $('.modal-footer button[type=submit]').html('Tambah Item');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Item');
        $('.modal-footer button[type=submit]').html('Ubah Data');
    });

});