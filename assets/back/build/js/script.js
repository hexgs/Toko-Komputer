$(function () {

    $('.tombolTambahItem').on('click', function () {
        $('#judulModal').html('Tambah Item');
        $('.modal-footer button[type=submit]').html('Tambah Item');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Item');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:100/Tampil-Item/admin/item/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
    });

});