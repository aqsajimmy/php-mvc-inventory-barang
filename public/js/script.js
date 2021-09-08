$(document).ready(function() {
	$('.tampilModalTambahBarang').on('click', function() {
         $('#forModalLabel').html('Tambah Data Barang');
         $('.modal-footer button[type=submit]').html('Tambah Data'); 
         $('.modal-body form').attr('action', 'http://localhost/imedia/public/admin/tambah');
         $('#nama_barang').val('');
         $('#kategori').val('');
         $('#jumlah').val('');
         $('#satuan').val('');
         $('#hmodal').val('');
         $('#htoko').val('');
         $('#hkusus').val('');
         $('#huser').val('');
         $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function() {
         $('#forModalLabel').html('Ubah Data Barang');
         $('.modal-footer button[type=submit]').html('Ubah Data'); 
         $('.modal-body form').attr('action', 'http://localhost/imedia/public/admin/ubahdata');

         const id = $(this).data('id');
         
         $.ajax({
         	url: 'http://localhost/imedia/public/admin/getubah',
         	data: {id : id},
         	method: 'post',
         	dataType: 'json',
            success: function(data) {
               $('#nama_barang').val(data.nama_barang);
               $('#kategori').val(data.kategori);
               $('#jumlah').val(data.jumlah);
               $('#satuan').val(data.satuan);
               $('#hmodal').val(data.hmodal);
               $('#htoko').val(data.htoko);
               $('#hkusus').val(data.hkusus);
               $('#huser').val(data.huser);              
               $('#id').val(data.id);
         	}


				}); 
	});     
});