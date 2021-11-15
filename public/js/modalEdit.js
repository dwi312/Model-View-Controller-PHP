$(function () {
    $('.btnTambah').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah data');

    })

    $('.modalEdit').on('click', function () {
        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit data');
        $('.modal-body form').attr('action', 'http://localhost:8080/latihan/Model-View-Controller-PHP/public/mahasiswa/edit')

        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost:8080/latihan/Model-View-Controller-PHP/public/mahasiswa/getedit',
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