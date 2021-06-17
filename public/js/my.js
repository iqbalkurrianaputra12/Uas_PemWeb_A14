
$(function(){

        $('.tombolTambahData').on('click', function(){
            
            $('#formModalLabel').html('Tambah Data TourGuide');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#daerah').val('');
            $('#nilai').val('');
            $('#no_hp').val('');
            $('#id').val('');

        });

        $('.tampilModalUbah').on('click', function(){
        
            $('#formModalLabel').html('Ubah Data TourGuide');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/tourguide/ubah');
    
            const id = $(this).data('id');
            
            $.ajax({
                url: 'http://localhost/phpmvc/public/tourguide/getubah',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#daerah').val(data.daerah);
                    $('#nilai').val(data.nilai);
                    $('#no_hp').val(data.no_hp);
                    $('#id').val(data.id);    
                }
            });
       }); 

});