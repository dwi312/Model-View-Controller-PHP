$(function () {

    $('.btnEdit').on('click', function () {
        $('#formModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah User');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
        $('#judulModal').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form')[0].reset();
    });

    $('.modalEdit').on('click', function () {
        $('#formModalLabel').html('Edit Data User');
        $('.modal-footer button[type=submit]').html('Edit User');
        $('.modal-body form').attr('action', 'http://localhost/phpdasar/mvc/public/data_user/edit');
        $('.modal-body form')[0].reset();

        const id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url: 'http://localhost/phpdasar/mvc/public/data_user/getedit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });


});