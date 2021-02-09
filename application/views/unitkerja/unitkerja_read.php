<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Unitkerja Read</h2>
        <table class="table">
	    <tr><td>Nama Unit</td><td><?php echo $nama_unit; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Struktur Bidang</td><td><?php echo $struktur_bidang; ?></td></tr>
	    <tr><td>Icon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Pimpinan</td><td><?php echo $pimpinan; ?></td></tr>
	    <tr><td>Kontak</td><td><?php echo $kontak; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Maps</td><td><?php echo $maps; ?></td></tr>
	    <tr><td>Jumlah Pegawai</td><td><?php echo $jumlah_pegawai; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('unitkerja') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>